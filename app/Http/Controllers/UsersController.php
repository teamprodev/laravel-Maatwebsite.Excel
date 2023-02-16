<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersExportChunk;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function export_chunked()
    {
        return (new UsersExportChunk())->download('users_chunked.xlsx');

    }


}
