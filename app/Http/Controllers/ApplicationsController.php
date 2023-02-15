<?php

namespace App\Http\Controllers;

use App\Exports\ApplicationsExportChunk;
use App\Exports\UsersExport;
use App\Exports\UsersExportChunk;
use Maatwebsite\Excel\Facades\Excel;

class ApplicationsController extends Controller
{
    public function export()
    {
        (new ApplicationsExportChunk())->store('applications_chunked.xlsx');
        return Excel::download(new ApplicationsExportChunk, 'applications_chunked.xlsx');
        //return Excel::download(new UsersExport, 'users.xlsx');
    }
}
