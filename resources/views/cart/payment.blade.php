@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="section group row">
            <div class="col-7">
                <table class="table cart-table" style="">
                    <thead class="cart-header">
                    <tr>
                        <td class="cart-item-0"></td>
                        <td class="cart-item-1" scope="col">Ảnh</td>
                        <td class="cart-item-1" scope="col">Tên Sản Phẩm</td>
                        <td class="cart-item-1" scope="col">Số lượng</td>
                        <td class="cart-item-1" scope="col">Đơn giá</td>
                        <td class="cart-item-1" scope="col">Thành tiền</td>
                    </tr>
                    </thead>
                    <tbody class="cart-body-1">
                    @foreach($carts->items as $product)
                        <tr class="product-row">
                            <td class="cart-item-0"><span id="product-id" data-id="{{$product['item']->id}}"
                                                          class="cart-value"></span></td>
                            <td class="cart-item-1"><img src="{{asset('/storage/' . $product['item']->image)}}"
                                                          style="width: 40px; height: 40px"></td>
                            <td class="cart-item-1 pt-4" scope="row"><span>{{$product['item']->title}}</span></td>
                            <td class="cart-item-1" style="padding-top: 23px">{{$product['qty']}}</td>
                            <td class="cart-item-1 pt-4" style="padding-left: 35px"><span class="price" data-price="price"
                                                               type="">{{number_format($product['item']->price)}}</span>
                            </td>
                            <td class="cart-item-1 pt-4" style="padding-left: 35px"><span class="total"
                                                               data-total="total">{{number_format($product['price'])}}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div style="position: absolute; padding-top: 12px; width: 95%">
                    <a id="btnContinue" class="btn-sm btn-light" href="{{url()->previous()}}"> Quay lại giỏ hàng</a>
                    <div style="float: right; font-size: 15px">
                        <p style="font: initial;font-size: larger;font-weight: bolder; padding-right: 20px">Tổng
                            tiền: <span style="color: red"
                                id="totalPrice">{{number_format($carts->totalPrice)}}đ</span></p>
                    </div>
                </div>
            </div>
            <div class="col-5" style="border: 1px solid lightgrey;padding: 10px;">
                <h2 style="font-size: 22px;font-family: 'ambleregular'">Địa chỉ giao hàng </h2><hr>
                <form action="{{route('bill.store')}}" method="post" id="orderForm">
                     @csrf
                    <div class="form-group">
                        <label style="font-size: 14px;">Họ và tên người nhận<span style="color: red">*</span></label>
                        <input name="name" class="form-control mt-3" placeholder="Nhập họ tên người nhận" autofocus>
                        @error('name')
                        <span class="label" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label style="font-size: 14px;">Điện thoại<span style="color: red">*</span></label>
                        <input type="number" name="phonenumber" class="form-control mt-3" placeholder="Nhập số điện thoại">
                        @error('phonenumber')
                        <span class="label" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label style="font-size: 14px;">Địa chỉ nhận hàng<span style="color: red">*</span></label>
                        <input name="address" class="form-control mt-3" placeholder="Nhập địa chỉ nhận hàng">
                        @error('address')
                        <span class="label" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Gửi đơn hàng</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            function validate() {
                let array = $('.form-control');
                $.each(array, function (key, value) {
                    if($(value).val() === '')
                    {
                        let noti = $(value).parents('.form-group').find('label').text();
                        $(value).focus();
                        alert(noti + ' không được để trống');
                        return false;
                    }
                })
                return true;
            }

            $('.btn-success').on('submit', function (e) {
                e.preventDefault();
                validate();
                // $(this).submit();
            })
        })
    </script>
@endsection
