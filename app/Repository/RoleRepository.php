<?php


namespace App\Repository;


use App\Role;
use Illuminate\Support\Facades\DB;

class RoleRepository implements CommonRepository
{

    public function list($pageSize)
    {
        // TODO: Implement list() method.
        $roles = DB::table('roles')->take($pageSize)->get();
        return $roles;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return Role::findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $param = [
          'rolename' => $request->rolename,
        ];
        Role::updateOrCreate($param);
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $role = $this->findById($id);
        $role->update($request->all());
        $role->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $role = $this->findById($id);
        $role->delete();
    }
}
