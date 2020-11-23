@extends('admin.layouts.head')
@section('content')
    <section class="content">
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="m-2">
            <div class="row table-title">
                <div class="col-6">
                    <h4>Hóa đơn bán</h4>
                </div>
                <div class="col-6 toolbar">
                    <div class="btn-toolbar btn-group" role="toolbar" style="float: right">
                        <div class="btn-group func mr-3" role="group" aria-label="First group">
                            <button type="button" class="btn btn-plus " id="createNewUser" data-target="#ajaxModel"><i
                                    class="fas fa-plus" style="color: black"></i>
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
                </div>
            </div>
            <div>
                <table class="data-table">
                    <thead class="data-table-head">
                    <tr style="display: flex; align-items: center">
                        <th class="id-column">ID</th>
                        <th class="action-column">Hành động</th>
                        <th class="first-name-column">Tên KH</th>
                        <th class="email-column">Địa chỉ</th>
                        <th class="role-column">Trạng thái</th>
                        <th class="role-column">Tổng tiền</th>
                        <th class="email-column">Ngày tạo</th>
                    </tr>
                    <tr>
                        <th class="id-column"></th>
                        <th class="action-column"></th>
                        <th class="first-name-column"><input type="text" class="input-search data-filter "
                                                             id="column_name"></th>
                        <th class="email-column"></th>
                        <th class="role-column">
                            <select id="column_status" class="input-search data-filter">
                                <option value="" selected></option>
                                @foreach($statues as $status)
                                    <option class="badge badge-{{$status->color}}"
                                            value="{{$status->id}}">{{$status->statusname}}</option>
                                @endforeach
                            </select>
                        <th class="role-column"></th>
                        <th class="column_email-column"></th>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="data-table-body">
                    {{--                        <div class="loading-table" style="display: none"></div>--}}
                    @foreach($orders as $order)
                        <tr class="data-row">
                            <td class="id-column" data-id="{{$order->id}}">{{$order->id}}</td>
                            <td class="action-column">
                                <a href="{{route('orders.edit', $order->id)}}"><span
                                        class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
                                <a href="javascript:void(0)"><span
                                        class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
                            </td>
                            <td class="first-name-column">{{$order->name}}</td>
                            <td class="email-column">{{$order->address}}</td>
                            <td class="role-column">
                                <span class="badge badge-{{$order->color}}" id="status" style="width: 90px">{{$order->statusname}}</span>
                                <select class="change-status" style="width: 15px; border: none">
                                    @foreach($statues as $status)
                                        <option class="badge badge-{{$status->color}}" value="{{$status->id}}"
                                                data-color="{{$status->color}}">{{$status->statusname}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="role-column">{{number_format($order->total)}}đ</td>
                            <td class="email-column">{{$order->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row mt-2" style="justify-content: space-between">
                <div class="col-3 ml-2">
                    <span>Tổng kết quả <b id="total">{{count($orders)}}</b></span>
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
    </section>
    <script src="{{asset('admin/ordertable.js')}}" defer></script>
@endsection
