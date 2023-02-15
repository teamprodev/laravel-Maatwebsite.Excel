<?php

namespace App\DataTables;

use App\Exports\UsersExport;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    protected string $exportClass = UsersExport::class;
}
