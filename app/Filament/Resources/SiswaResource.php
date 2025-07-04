<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Filament\Resources\SiswaResource\RelationManagers;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;
use Filament\Tables\Actions\ExportAction;
use Filament\Actions\Exports\Enums\ExportFormat;
use Filament\Tables\Actions\ExportBulkAction;
use App\Filament\Exports\SiswaExporter;

class SiswaResource extends Resource
{
    public static function getNavigationLabel(): string
    {
        return 'Data Siswa'; // Custom title for the sidebar
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pendaftar'; // Group in the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $pluralModelLabel = 'Data Siswa';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Placeholder::make('warning')
                    ->label('Mohon baca sebelum mengubah data')
                    ->content(fn ($record) => new HtmlString( '<span class="text-gray-500">Jika ada data yang diubah mohon gunakan huruf kapital, untuk menyesuaikan format data pada Database!</span>')),
                Placeholder::make('downloads')
                    ->label('Download Semua Dokumen Siswa')
                    ->content(fn ($record) => new HtmlString(
                        '
                        <a href="' . route('siswa.downloads', $record->NIK_siswa) . '" class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                            Download Semua
                        </a>
                        '
                ))->columns(1),
                Section::make('Akun Pendaftar')
                    ->relationship('guest')
                    ->disabled()
                    ->schema([
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('username'),
                    ])->columns(2),

                Section::make('Data Siswa')
                ->schema([
                    Forms\Components\TextInput::make('NIK_siswa')
                        ->label('NIK')
                        ->numeric()
                        ->disabled(),

                    Forms\Components\TextInput::make('NISN')
                        ->label('NISN')
                        ->numeric()
                        ->disabled(),

                    Forms\Components\TextInput::make('nama')
                        ->label('Nama Siswa')
                        ->required(),

                    Forms\Components\SELECT::make('jenis')
                        ->label('Jenis Kelamin')
                        ->options([
                            'LAKI-LAKI' => 'LAKI-LAKI',
                            'PEREMPUAN' => 'PEREMPUAN',
                        ])
                        ->native(false)
                        ->required(),

                    Forms\Components\TextInput::make('tmp_lhr')
                        ->label('Tempat Lahir')
                        ->required(),

                    Forms\Components\DatePicker::make('tgl_lhr')
                        ->label('Tanggal Lahir')
                        ->required(),

                    Forms\Components\TextInput::make('agama')
                        ->label('Agama')
                        ->required(),

                    Forms\Components\SELECT::make('warga')
                        ->label('Kewarganegaraan')
                        ->options([
                            'WNI' => 'WNI',
                            'WNA' => 'WNA',
                        ])
                        ->native(false)
                        ->required(),

                    Forms\Components\TextInput::make('anak_ke')
                        ->label('Anak Ke')
                        ->numeric()
                        ->required(),
                    
                    Forms\Components\TextInput::make('dari_br')
                        ->label('Dari Bersaudara')
                        ->numeric()
                        ->required(),

                    Forms\Components\TextInput::make('asal_sklh')
                        ->label('Asal Sekolah')
                        ->required(),
                    
                    Forms\Components\TextInput::make('daftar_ke')
                        ->label('Mendaftar ke')
                        ->required(),

                    Forms\Components\TextInput::make('infaq')
                        ->label('Infaq')
                        ->numeric()
                        ->required(),
                ])->columns(2),

                Section::make('Status Siswa') 
                ->schema([
                    Forms\Components\Select::make('status')
                    ->hiddenLabel()
                    ->options([
                            'Diperiksa' => 'Diperiksa',
                            'Diterima' => 'Diterima',
                    ])
                    ->native(false)
                    ->required(),

                    Forms\Components\Toggle::make('status_bayar'),
                ])->columns(2),

                Section::make('Status Pendaftaran')
                    ->relationship('tahun')
                    ->schema([
                        Forms\Components\TextInput::make('tahun')
                            ->label('Tahun Ajaran')
                            ->disabled(),
                        Forms\Components\TextInput::make('status')
                            ->label('Status Pendaftaran')
                            ->disabled(),
                    ])->columns(2),

                Section::make('Data Alamat')
                    ->relationship('alamat')
                    ->schema([
                        Forms\Components\TextInput::make('alamat')
                            ->label('Alamat Siswa'),
                        Forms\Components\TextInput::make('desa')
                            ->label('Desa'),
                        Forms\Components\TextInput::make('kecamatan')
                            ->label('Kecamatan'),
                        Forms\Components\TextInput::make('kabupaten/kota')
                            ->label('Kabupaten/Kota'),
                        Forms\Components\TextInput::make('provinsi')
                            ->label('Provinsi'),
                    ])->columns(2),

                Section::make('Data Ayah')
                    ->relationship('ayah')
                    ->schema([
                        Forms\Components\TextInput::make('NIK')
                            ->disabled()
                            ->label('NIK Ayah Siswa'),
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Ayah Siswa'),
                        Forms\Components\TextInput::make('pekerjaan')
                            ->label('Pekerjaan'),
                        Forms\Components\SELECT::make('pendidikan')
                            ->label('Pendidikan')
                            ->options([
                                'SD/MI' => 'SD/MI',
                                'SMP/SLTP Sederajat' => 'SMP/SLTP Sederajat',
                                'SMA/SLTA Sederajat' => 'SMA/SLTA Sederajat',
                                'D3' => 'D3',
                                'D4' => 'D4',
                                'S1' => 'S1',
                                'S2' => 'S2',
                                'S3' => 'S3',
                            ])
                            ->native(false),
                        Forms\Components\SELECT::make('status')
                            ->label('Status')
                            ->options([
                                'MASIH HIDUP' => 'MASIH HIDUP',
                                'MENINGGAL' => 'MENINGGAL',
                                'LAINNYA' => 'LAINNYA',
                            ])
                            ->native(false),
                        Forms\Components\SELECT::make('warga')
                            ->label('Warga')
                            ->options([
                                'WNI' => 'WNI',
                                'WNA' => 'WNA',
                            ])
                            ->native(false),
                        Forms\Components\TextInput::make('agama')
                            ->label('Agama'),
                        Forms\Components\TextInput::make('tmp_lhr')
                            ->label('Tempat Lahir')
                            ->autocapitalize('on'),
                        Forms\Components\DatePicker::make('tgl_lhr')
                            ->label('Tanggal Lahir'),
                        Placeholder::make('ktp')
                            ->label('Preview Foto KTP')
                            ->content(fn ($record) => new HtmlString(
                                $record->ktp
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/ktp/' . $record->ktp) . '" class="h-32 rounded-md" />
                                            <a href="' . url('global/data/ktp/' . $record->ktp) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download KTP
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No KTP uploaded.</span>'
                            )),
                    ])->columns(2),

                Section::make('Data Ibu')
                    ->relationship('ibu')
                    ->schema([
                        Forms\Components\TextInput::make('NIK')
                            ->disabled()
                            ->label('NIK Ayah Siswa'),
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Ayah Siswa'),
                        Forms\Components\TextInput::make('pekerjaan')
                            ->label('Pekerjaan'),
                        Forms\Components\SELECT::make('pendidikan')
                            ->label('Pendidikan')
                            ->options([
                                'SD/MI' => 'SD/MI',
                                'SMP/SLTP Sederajat' => 'SMP/SLTP Sederajat',
                                'SMA/SLTA Sederajat' => 'SMA/SLTA Sederajat',
                                'D3' => 'D3',
                                'D4' => 'D4',
                                'S1' => 'S1',
                                'S2' => 'S2',
                                'S3' => 'S3',
                            ])
                            ->native(false),
                        Forms\Components\SELECT::make('status')
                            ->label('Status')
                            ->options([
                                'MASIH HIDUP' => 'MASIH HIDUP',
                                'MENINGGAL' => 'MENINGGAL',
                                'LAINNYA' => 'LAINNYA',
                            ])
                            ->native(false),
                        Forms\Components\SELECT::make('warga')
                            ->label('Warga')
                            ->options([
                                'WNI' => 'WNI',
                                'WNA' => 'WNA',
                            ])
                            ->native(false),
                        Forms\Components\TextInput::make('agama')
                            ->label('Agama'),
                        Forms\Components\TextInput::make('tmp_lhr')
                            ->label('Tempat Lahir')
                            ->autocapitalize('on'),
                        Forms\Components\DatePicker::make('tgl_lhr')
                            ->label('Tanggal Lahir'),
                        Placeholder::make('ktp')
                            ->label('Preview Foto KTP')
                            ->content(fn ($record) => new HtmlString(
                                $record->ktp
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/ktp/' . $record->ktp) . '" class="h-32 rounded-md" />
                                            <a href="' . url('global/data/ktp/' . $record->ktp) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download KTP
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No KTP uploaded.</span>'
                            )),
                    ])->columns(2),

                Section::make('Link File Siswa')
                    ->relationship('file')
                    ->schema([
                        Placeholder::make('pas_foto')
                            ->label('Preview Pas Foto')
                            ->content(fn ($record) => new HtmlString(
                                $record->pas_foto
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/foto/' . $record->pas_foto) . '" class="w-64 rounded-md" />
                                            <a href="' . url('global/data/foto/' . $record->pas_foto) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download File
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No File uploaded.</span>'
                            )),
                        Placeholder::make('akta')
                            ->label('Preview akta')
                            ->content(fn ($record) => new HtmlString(
                                $record->akta
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/akta/' . $record->akta) . '" class="w-64 rounded-md" />
                                            <a href="' . url('global/data/akta/' . $record->akta) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download File
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No File uploaded.</span>'
                            )),
                        Placeholder::make('kk')
                            ->label('Preview Kartu Keluarga')
                            ->content(fn ($record) => new HtmlString(
                                $record->kk
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/kk/' . $record->kk) . '" class="w-64 rounded-md" />
                                            <a href="' . url('global/data/kk/' . $record->kk) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download File
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No File uploaded.</span>'
                            )),
                        Placeholder::make('ijasah')
                            ->label('Preview Ijasah')
                            ->content(fn ($record) => new HtmlString(
                                $record->ijasah
                                    ? '
                                        <div class="flex flex-col items-start gap-2">
                                            <img src="' . url('global/data/ijasah/' . $record->ijasah) . '" class="w-64 rounded-md" />
                                            <a href="' . url('global/data/ijasah/' . $record->ijasah) . '" download class="inline-block px-4 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700 transition">
                                                Download File
                                            </a>
                                        </div>
                                    '
                                    : '<span class="text-gray-500">No File uploaded.</span>'
                            )),
                    ])->columns(2),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading('Data Siswa')
            ->description('Dimohon untuk tidak mengubah atau menghapus data siswa!, mengubah data siswa hanya jika diperlukan atau mengubah status pembayaran dan penerimaan')
            ->emptyStateHeading('Tidak ada data')
            ->columns([
                Tables\Columns\TextColumn::make('NISN')
                        ->label('NISN'),

                Tables\Columns\TextColumn::make('NIK_siswa')
                        ->label('NIK'), 

                Tables\Columns\TextColumn::make('nama')
                        ->label('Nama')
                        ->searchable(),

                Tables\Columns\TextColumn::make('jenis')
                        ->label('Jenis Kelamin'),

                Tables\Columns\TextColumn::make('warga')
                        ->label('WN'), 

                Tables\Columns\TextColumn::make('agama')
                        ->label('Agama'), 

                Tables\Columns\TextColumn::make('asal_sklh')
                        ->label('Asal Sekolah'),

                Tables\Columns\TextColumn::make('daftar_ke')
                        ->label('Mendaftar Ke'),

                Tables\Columns\TextColumn::make('daftar_pes')
                        ->label('Mendaftar Pesantren'),

                Tables\Columns\BooleanColumn::make('status_bayar')
                        ->label('Status Pembayaran')
                        ->trueIcon('heroicon-o-check-circle')
                        ->falseIcon('heroicon-o-x-circle')
                        ->trueColor('success')
                        ->falseColor('danger')
                        ->getStateUsing(fn ($record) => $record->status_bayar !== null)
                        ->sortable(),

                Tables\Columns\TextColumn::make('status')
                        ->label('Status')
                        ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]) 
            ])
            ->headerActions([
                ExportAction::make()
                    ->exporter(SiswaExporter::class)
                    ->formats([
                        ExportFormat::Xlsx,
                    ])
                    ->columnMapping(false)
                    ->label('Export Semua Data Siswa')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make()
                    ->exporter(SiswaExporter::class)
                    ->formats([
                        ExportFormat::Xlsx,
                    ])
                    ->columnMapping(false)
                    ->label('Export Data Siswa Terpilih')
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                // ...
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
