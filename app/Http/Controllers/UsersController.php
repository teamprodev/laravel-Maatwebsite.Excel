<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\UsersExportChunk;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    public function export()
    {
        (new UsersExportChunk())->store('users_chunked.xlsx');
        return Excel::download(new UsersExportChunk, 'users_chunked.xlsx');
        //return Excel::download(new UsersExport, 'users.xlsx');
    }
}
