<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $result = DB::table('users')
            ->leftJoin('roles', 'roles.id', '=', 'users.role')
            ->select('users.id', 'users.firstname', 'users.lastname', 'users.email', 'roles.rolename as role')
            ->get();
        return $result;
    }

    public function headings() :array {
        return ["ID", "Tên", "Họ", "Quyền", "Email" ];
    }
}
