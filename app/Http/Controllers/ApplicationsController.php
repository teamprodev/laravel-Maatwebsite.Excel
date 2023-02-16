<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationsExport;
use App\Exports\ApplicationsExportChunk;
use App\Exports\UsersExport;
use App\Exports\UsersExportChunk;
use Maatwebsite\Excel\Facades\Excel;

class ApplicationsController extends Controller
{
    public function export()
    {
        return Excel::download(new ApplicationsExport, 'applications.xlsx');
    }

    public function export_chunked()
    {
        return (new ApplicationsExportChunk())->download('applications_chunked.xlsx');
    }
}
