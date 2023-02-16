<?php

namespace App\Exports;

use App\Models\Application;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Yajra\DataTables\Exports\DataTablesCollectionExport;

class ApplicationsExportChunk extends DataTablesCollectionExport implements FromQuery, WithMapping
    {
    use Exportable;

    public function query()
    {
        return Application::query();
    }

    public function headings(): array
    {
        $application = new Application;

        $table = $application->getTable();
        $columns  = Schema::getColumnListing($table);
        return $columns;
    }

    public function map($row): array
    {
        $application = new Application;

        $table = $application->getTable();
        $columns  = Schema::getColumnListing($table);
        $returnArray = array();

        foreach ($columns as $column) {
            $returnArray[] = $row[$column];
        }

        return $returnArray;
    }
}
