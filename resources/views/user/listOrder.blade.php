@extends('layouts.app')
@section('content')
    <div class="container pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="font-size: 1em">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hóa đơn</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body" style="height: 70vh">
                <table class="table" style="width: 100%;display: block;overflow-x: auto;">
                    <thead class="thead-dark" style="display: inline-block;width: 100%;">
                    <th scope="col" style="width: 100px">#</th>
                    <th scope="col" style="width: 300px">Mã hóa đơn</th>
                    <th scope="col" style="width: 300px">Ngày mua</th>
                    <th scope="col" style="width: 300px">Tổng giá tiền</th>
                    </thead>
                    <tbody style="height: 50vh; width: 100%;overflow-y: scroll;display: inline-block;">
                    @foreach($orders as $key => $order)
                        <tr>
                            <td style="width: 100px">{{ ++$key }}</td>
                            <td style="width: 300px"><a href="{{route('users.billDetail', $order->id)}}">{{ $order->id }}</a></td>
                            <td style="width: 300px">{{$order->created_at->format('Y-m-d')}}</td>
                            <td style="width: 300px">{{number_format($order->total)}}đ</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
