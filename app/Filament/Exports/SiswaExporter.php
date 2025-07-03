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
            ExportColumn::make('NISN'),
            ExportColumn::make('nama'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Data siswa berhasil disimpan dengan ' . number_format($export->successful_rows) . ' ' . str('data')->plural($export->successful_rows) . ' tersimpan.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('data')->plural($failedRowsCount) . ' gagal tersimpan.';
        }

        return $body;
    }
}
