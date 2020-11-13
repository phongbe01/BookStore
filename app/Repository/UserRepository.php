<?php


namespace App\Repository;


use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements CommonRepository
{
    public function getCount()
    {
        $count = count(User::all());
        return $count;
    }

    public function list($pageSize)
    {
        // TODO: Implement list() method.
        $result = DB::table('users')
            ->leftJoin('roles', 'roles.id', '=', 'users.role')
            ->select('users.id', 'users.firstname', 'users.lastname', 'users.email', 'roles.rolename as role')
            ->take($pageSize)
            ->get();
        return $result;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return User::findOrFail($id);
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $params = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::updateOrCreate($params);
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $user = $this->findById($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role = $request->role;
//        $user->update($request->only('firstname', 'lastname', 'email', 'role'));
        $user->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $user = $this->findById($id);
        $user->delete();
    }

    public function findByCode($params, $pageSize, $pageNumber)
    {
        $result = DB::table('users')
            ->leftJoin('roles', 'roles.id', '=', 'users.role')
            ->select('users.id', 'users.firstname', 'users.lastname', 'users.email', 'roles.rolename as role');
            if($params != null)
            {
                foreach ($params as $param)
                {
                    if ($param['value'] != null)
                    {
                        $result->where($param['field'], 'like', $param['value'] );
                    }
                }
            }
            $count = $result->count();
            $result->skip($pageNumber)->take($pageSize);
            return ['result' => $result->get(), 'count' => $count];
    }
}
