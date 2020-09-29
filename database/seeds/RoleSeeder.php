<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role();
        $role->rolename = 'admin';
        $role->save();


        $role = new \App\Role();
        $role->rolename = 'custom';
        $role->save();
    }
}
