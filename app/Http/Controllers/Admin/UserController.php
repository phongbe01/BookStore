<?php

namespace App\Http\Controllers\Admin;

use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $userRepository;
    private $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->userRepository->list(10);
        $count = $this->userRepository->getCount();
        $roles = $this->roleRepository->list(10);
        return view('admin.user.index', compact('users', 'roles', 'count'));
    }

    public function searchByCode(Request $request)
    {
        $pageSize = $request->get('pageSize');
        $pageNumber = $request->get('pageNumber');
        $params = $request->get('params');
        $array = $this->userRepository->findByCode($params, ($pageSize == null)? 10: $pageSize,($pageNumber == null)? 0: $pageNumber);
        $users = $array['result'];
        $count = $array['count'];
        $lastIndex = $users->count();
        return response()->json(['key' => $users, 'lastIndex' => $lastIndex, 'count' =>$count]);
    }

    /**
     * Show the form for creatinwebg a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $roles = $this->roleRepository->list(10);
        return response()->json(['role' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'bail|required|min:4',
            'lastname' => 'bail|required|min:4',
            'email' => 'bail|required|email',
            'password' => 'bail|min:6',
            'role' => 'bail|required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        } else {
            if ($request->id) {
                $this->userRepository->update($request, $request->id);
                $users = $this->userRepository->list(10);
                $count = $this->userRepository->getCount();
                return response()->json(['success' => 'Thay đổi thành công.', 'users' => $users, 'count' => $count,]);
            } else {
                $this->userRepository->create($request);
                $users = $this->userRepository->list(10);
                $count = $this->userRepository->getCount();
                return response()->json(['success' => 'Tạo mới thành công.', 'users' => $users, 'count' => $count]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        $user = $this->userRepository->findById($id);
        $role = $this->roleRepository->list(10);
        return response()->json(['user' => $user, 'role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        $users = $this->userRepository->list(10);
        $count = $this->userRepository->getCount();
        return response()->json(['success' => 'Xóa tài khoản thành công.', 'users' => $users, 'count' => $count,]);
    }
}
