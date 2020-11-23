@extends('admin.layouts.head')
@section('content')
    <div style="padding: 20px; border: 1px solid lightgrey">
        <div class="order">
            <p>Mã hóa đơn: <span id="orderID">{{$order->id}}</span></p>
            <p>Người mua: {{$order->name}}</p>
            <p>Ngày mua: {{$order->created_at}}</p>
            <p>Tình trạng: <span class="badge badge-{{$order->color}}" id="status">{{$order->statusname}}</span>
                <select  class="change-status" style="width: 20px">
                    <option value="" selected></option>
                    @foreach($statues as $status)
                            <option class="badge badge-{{$status->color}}" value="{{$status->id}}" data-color="{{$status->color}}">{{$status->statusname}}</option>
                    @endforeach
                </select></p>
        </div>
        <div class=" border">
            <table id="cart" class="table" style="text-align: center">
                <thead>
                <tr>
                    <th style="width:20%">Ảnh</th>
                    <th style="width:30%">Tên sản phẩm</th>
                    <th style="width:20%">Giá</th>
                    <th style="width:20%">Số lượng</th>
                    <th style="width:22%" class="text-center">Tổng</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($ordersDetail as $orderDetail)
                    <tr>
                        <td data-th="Product">
                            <img src="{{ asset('storage/' . $orderDetail->image) }}"
                                 alt="..."
                                 class="img-responsive" width="80px"/>
                        </td>
                        <td>
                            <h4 class="nomargin">{{ $orderDetail->title }}</h4>
                        </td>
                        <td>{{number_format($orderDetail->price)}}đ</td>
                        <td>{{$orderDetail->quantity}}</td>
                        <td>{{number_format($orderDetail->price * $orderDetail->quantity)}}đ</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
        <div class="col-sm-offset-2 col-sm-10 mt-3">
            <a class="btn btn-primary pr-4" id="saveBtn" href="{{route('orders.index')}}">Quay lại
            </a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

        });
    </script>
@endsection
