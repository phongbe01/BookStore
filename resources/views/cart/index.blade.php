@extends('layouts.app')
@section('content')
    <div>
        <div>
            <h2 class="cart-title">Giỏ hàng</h2>
        </div>
        <div class="section group" style="height: 80vh">
            @if(!empty(Session::get('cart')->totalQty))
                <table class="table" style="text-align: center; border-bottom: 1px solid lightgrey">
                    <thead>
                    <tr>
                        <td></td>
                        <td scope="col">Tên Sản Phẩm</td>
                        <td scope="col">Ảnh</td>
                        <td scope="col">Số lượng</td>
                        <td scope="col">Đơn giá</td>
                        <td scope="col">Thành tiền</td>
                        <td scope="col"></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carts->items as $product)
                        <tr class="product-row">
                            <td><span id="product-id" data-id="{{$product['item']->id}}" class="cart-value"></span></td>
                            <td scope="row"><span>{{$product['item']->title}}</span></td>
                            <td><img src="{{asset('/storage/' . $product['item']->image)}}" width="60"></td>
                            <td style="width: 100px"><input type="number" class="txtQuantity form-control cart-value"
                                                            data-qty="quantity"
                                                            value="{{$product['qty']!= 1 ? $product['qty'] : 1}}"></td>
                            <td><span class="price" data-price="price"
                                      type="">{{number_format($product['item']->price)}}</span></td>
                            <td><span class="total" data-total="total">{{number_format($product['price'])}}</span></td>
                            <td><a href="#" class="btn btn-danger product-delete" data-id="36">Xóa</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div>
                    <h2>Bạn chưa mua hàng</h2>
                </div>
            @endif
            <div style="position: absolute; padding-top: 12px;">
                <a id="btnContinue" class="btn btn-light" href="{{route('home')}}"> Tiếp tục mua hàng</a>
                <button id="btnUpdate" class="btn btn-primary">Cập nhật giỏ hàng</button>
                <button id="btnDeleteAll" class="btn btn-danger"> Xóa giỏ hàng</button>
                <button id="btnPayment" class="btn btn-warning">Thanh toán</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.txtQuantity').on('keyup', function () {
                let qty = parseInt($(this).val());
                let id = $(this).parents('tr').find('#product-id').attr('data-id');
                if (qty >= 1) {
                    let total = $(this).parents('tr').find('.total');
                    let price = $(this).parents('tr').find('.price').text();
                    let param = {
                        id: id,
                        qty: qty,
                    };
                    $.ajax({
                        url: '/update-cart/' + id,
                        type: 'get',
                        dataType: 'json',
                        data: {
                            param: param,
                        },
                        success: function (data) {
                            console.log(data.total);
                            let b = Number(price.replace(/[^0-9.-]+/g, ""));
                            let a = b * parseInt(qty);
                            total.text(addCommas(a));
                            $('#total').text(data.total);
                        }
                    });
                } else {
                    $(this).val(1);
                }
            })

            //remove
            $('.product-delete').on('click', function (e) {
                e.preventDefault();
                let id = $(this).parents('tr').find('#product-id').attr('data-id')
                let tr = $(this).parents('tr');
                $.ajax({
                    url: '/remove-cart/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function (data) {
                        tr.remove();
                        console.log(tr);
                        $('#total').text(data.total);
                    }
                });
            });

            function addCommas(numberString) {
                numberString += '';
                var x = numberString.split('.'),
                    x1 = x[0],
                    x2 = x.length > 1 ? '.' + x[1] : '',
                    rgxp = /(\d+)(\d{3})/;

                while (rgxp.test(x1)) {
                    x1 = x1.replace(rgxp, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }
        });
    </script>
@endsection
