<?php

namespace App\Exports;

use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Yajra\DataTables\Exports\DataTablesCollectionExport;

    class ApplicationsExport extends DataTablesCollectionExport implements WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Application::all();
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
