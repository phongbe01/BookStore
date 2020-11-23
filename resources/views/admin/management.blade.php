@extends('.admin.layouts.head')
@section('content')
    <div class="container pt-4" >
        <div class="row">
            <div class="col-4" style="">
                <div class="card border-light mb-3" style="max-width: 18rem; border: 1px solid lightgrey">
                    <div class="card-header">Đơn hàng</div>
                    <div class="card-body">
                        @foreach($orders as $order)
                            <div class="row mt-3" style="border-bottom: 1px solid lightgray;padding-bottom: 10px">
                                <div class="col-8 badge badge-{{$order->color}}">{{$order->name}}</div>
                                <div class="col-4" style="text-align: right !important;">{{$order->sum}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-4" style="">
                <div class="card border-light mb-3" style="max-width: 18rem; border: 1px solid lightgrey">
                    <div class="card-header">Doanh thu trong năm</div>
                    <div class="card-body">
                        @foreach($months as $month)
                            <div class="row mt-3" style="border-bottom: 1px solid lightgray;padding-bottom: 10px">
                                <div class="col-4 badge">{{$month->month}}</div>
                                <div class="col-8" style="text-align: right !important;">{{number_format($month->sum)}}đ</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
