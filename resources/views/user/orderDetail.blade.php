@extends('layouts.app')
@section('content')
    <div class="container pt-3 pb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="font-size: 1em">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ url()->previous()}}">Hóa đơn</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết hóa đơn</li>
            </ol>
        </nav>
        <div class=" border">
            <table id="cart" class="table">
                <thead>
                <tr>
                    <th style="width:30%">Ảnh</th>
                    <th style="width:30%">Tên sản phẩm</th>
                    <th style="width:20%">Giá</th>
                    <th style="width:20%">Số lượng</th>
                    <th style="width:22%" class="text-center">Tổng</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td data-th="Product">
                            <img src="{{ asset('storage/' . $order->image) }}"
                                 alt="..."
                                 class="img-responsive" width="80px"/>
                        </td>
                        <td>
                            <h4 class="nomargin">{{ $order->title }}</h4>
                        </td>
                        <td>{{number_format($order->price)}}đ</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{number_format($order->price * $order->quantity)}}đ</td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
