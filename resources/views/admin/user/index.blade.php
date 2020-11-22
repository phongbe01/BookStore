@extends('admin.layouts.head')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class=" m-2">
            <div class="row table-title ">
                <div class="col-6">
                    <h4>Tài khoản</h4>
                </div>
                <div class="col-6 toolbar">
                    <div class="btn-toolbar btn-group" role="toolbar" style="float: right">
                        <div class="btn-group func mr-3" role="group" aria-label="First group">
                            <button type="button" class="btn btn-plus " id="createNewUser" data-target="#ajaxModel"><i class="fas fa-plus" style="color: black"></i>
                            </button>
                            <button type="button" class="btn "><i class="fas fa-upload mr-1"></i>Nhập
                            </button>
                            <a href="{{route('export')}}" class="btn "><i class="fas fa-download mr-1"></i>Xuất
                                Excel
                            </a>
                            <button type="button" class="btn btn-cog"><i
                                    class="fas fa-cog mr-1"></i>Tùy chỉnh
                            </button>
                        </div>
                        <div class="btn-group func" role="group" aria-label="Third group">
                            <button type="button" class="btn ">...</button>
                        </div>

                    </div>
                    <div class="btn-group btn-delete func" role="group" aria-label="Third group" hidden>
                        <button type="button" class="btn">Xóa</button>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                    <table class="data-table">
                        <thead class="data-table-head">
                        <tr style="display: flex; align-items: center">
                            <th class="id-column">ID</th>
                            <th class="action-column">Action</th>
                            <th class="first-name-column">First Name</th>
                            <th class="last-name-column">Last Name</th>
                            <th class="role-column">Role</th>
                            <th class="email-column">Email</th>
                        </tr>
                        <tr>
                            <th class="id-column"></th>
                            <th class="action-column"></th>
                            <th class="first-name-column"><input type="text" class="input-search data-filter "
                                                                 id="column_firstname"></th>
                            <th class="last-name-column"><input type="text" class="input-search data-filter"
                                                                id="column_lastname">
                            </th>
                            <th class="role-column">
                                <select  id="column_role" class="input-search data-filter">
                                    <option value="" selected></option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->rolename}}</option>
                                    @endforeach
                                </select>
                            <th class="column_email-column"></th>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="data-table-body">
{{--                        <div class="loading-table" style="display: none"></div>--}}
                        @foreach($users as $user)
                            <tr>
                                <td class="id-column" data-id="{{$user->id}}">{{$user->id}}</td>
                                <td class="action-column">
                                    <a href="javascript:void(0)"><span class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
                                    <a href="javascript:void(0)"><span class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
                                </td>
                                <td class="first-name-column">{{$user->firstname}}</td>
                                <td class="last-name-column">{{$user->lastname}}</td>
                                <td class="role-column">{{$user->role}}</td>
                                <td class="email-column">{{$user->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row mt-2" style="justify-content: space-between">
                    <div class="col-3 ml-2">
                        <span>Tổng kết quả <b id="total">{{$count}}</b></span>
                    </div>
                    <div class="col-6 page">
                        <div style="float:right; padding-right: 20px">
                            <span>Số bản ghi</span> <select name="" id="pageSize" class="pageSize mr-1">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <a class="link-back" disabled="true"><i class="fas fa-angle-double-left"></i></a>
                            <label id="first">1</label> -
                            <label id="last">10</label>
                            <a class="link-next"> <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    Modal  --}}
    @include('admin.user.modal')
{{--    --}}
    <script src="{{asset('admin/usertable.js')}}" defer></script>

@endsection
