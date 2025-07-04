<?php

namespace App\Filament\Exports;

use App\Models\Siswa;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class SiswaExporter extends Exporter
{
    protected static ?string $model = Siswa::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('guest.email')
                ->label('Email Akun Pendaftar'),
            ExportColumn::make('NISN')
                ->label('NISN'),
            ExportColumn::make('NIK_siswa')
                ->label('NIK'),
            ExportColumn::make('nama')
                ->label('Nama'),
            ExportColumn::make('jenis')
                ->label('L/P'),
            ExportColumn::make('asal_sklh')
                ->label('Asal Sekolah'),
            ExportColumn::make('tmp_lhr')
                ->label('Tempat Lahir'),
            ExportColumn::make('tgl_lhr')
                ->label('Tanggal Lahir'),
            ExportColumn::make('agama')
                ->label('Agama'),
            ExportColumn::make('warga')
                ->label('Kewarganegaraan'),
            ExportColumn::make('anak_ke')
                ->label('Anak Ke'),
            ExportColumn::make('dari_br')
                ->label('Dari - Bersaudaraa'),
            ExportColumn::make('daftar_ke')
                ->label('Mendaftar Ke'),
            ExportColumn::make('tahun.tahun')
                ->label('Tahun Ajar'),
            ExportColumn::make('status')
                ->label('Status'),
            ExportColumn::make('status_bayar')
                ->label('Status Pembayaran'),
            ExportColumn::make('alamat.alamat')
                ->label('Alamat'),
            ExportColumn::make('alamat.desa')
                ->label('Desa'),
            ExportColumn::make('alamat.kecamatan')
                ->label('Kecamatan'),
            ExportColumn::make('alamat.kabupaten/kota')
                ->label('Kabupaten/Kota'),
            ExportColumn::make('ayah.NIK')
                ->label('NIK Ayah'),
            ExportColumn::make('ayah.nama')
                ->label('Nama Ayah'),
            ExportColumn::make('ayah.tmp_lhr')
                ->label('Tempat Lahir'),
            ExportColumn::make('ayah.tgl_lhr')
                ->label('Tanggal Lahir'),
            ExportColumn::make('ayah.warga')
                ->label('Kewarganegaraan'),
            ExportColumn::make('ayah.agama')
                ->label('Agama'),
            ExportColumn::make('ayah.pendidikan')
                ->label('Pendidikan'),
            ExportColumn::make('ayah.pekerjaan')
                ->label('Pekerjaan'),
            ExportColumn::make('ayah.penghasilan')
                ->label('Penghasilan'),
            ExportColumn::make('ayah.status')
                ->label('Status'),
            ExportColumn::make('ibu.NIK')
                ->label('NIK Ibu'),
            ExportColumn::make('ibu.nama')
                ->label('Nama Ibu'),
            ExportColumn::make('ibu.tmp_lhr')
                ->label('Tempat Lahir'),
            ExportColumn::make('ibu.tgl_lhr')
                ->label('Tanggal Lahir'),
            ExportColumn::make('ibu.warga')
                ->label('Kewarganegaraan'),
            ExportColumn::make('ibu.agama')
                ->label('Agama'),
            ExportColumn::make('ibu.pendidikan')
                ->label('Pendidikan'),
            ExportColumn::make('ibu.pekerjaan')
                ->label('Pekerjaan'),
            ExportColumn::make('ibu.penghasilan')
                ->label('Penghasilan'),
            ExportColumn::make('ibu.status')
                ->label('Status'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Data siswa tercatat dengan ' . number_format($export->successful_rows) . ' ' . str('data')->plural($export->successful_rows) . ' berhasil tersimpan.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('data')->plural($failedRowsCount) . ' gagal tersimpan.';
        }

        return $body;
    }
}
