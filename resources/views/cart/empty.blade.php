
@if(Session::has('cart'))
    @if($carts->totalQty > 0)
        <table class="table cart-table" style="">
            <thead class="cart-header">
            <tr>
                <td class="cart-item-0"></td>
                <td class="cart-item-1" scope="col">Ảnh</td>
                <td class="cart-item-2" scope="col">Tên Sản Phẩm</td>
                <td class="cart-item-1" scope="col">Số lượng</td>
                <td class="cart-item-1" scope="col">Đơn giá</td>
                <td class="cart-item-1" scope="col">Thành tiền</td>
                <td class="cart-item-1" scope="col"></td>
            </tr>
            </thead>
            <tbody class="cart-body">
            @foreach($carts->items as $product)
                <tr class="product-row">
                    <td class="cart-item-0"><span id="product-id" data-id="{{$product['item']->id}}"
                                                  class="cart-value"></span></td>
                    <td class="cart-item-1 "><img src="{{asset('/storage/' . $product['item']->image)}}"
                                                  style="width: 60px; height: 60px"></td>
                    <td class="cart-item-2 pt-4" scope="row"><span>{{$product['item']->title}}</span></td>
                    <td class="cart-item-1"><input type="number" class="txtQuantity form-control cart-value"
                                                   data-qty="quantity"
                                                   value="{{$product['qty']!= 1 ? $product['qty'] : 1}}">
                    </td>
                    <td class="cart-item-1 pt-4"><span class="price" data-price="price"
                                                       type="">{{number_format($product['item']->price)}}</span>
                    </td>
                    <td class="cart-item-1 pt-4"><span class="total"
                                                       data-total="total">{{number_format($product['price'])}}</span>
                    </td>
                    <td class="cart-item-1 pt-3"><a><span style="color: red" class="product-delete far fa-trash-alt lv-data-table-trash form-delete"></span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div>
            <h2>Bạn chưa mua hàng.</h2>
        </div>
    @endif
@else
    <div>
        <h2>Bạn chưa mua hàng</h2>
    </div>
@endif
<div style="position: absolute; padding-top: 12px; width: 80%">
    <a id="btnContinue" class="btn btn-light" href="{{route('home')}}"> Tiếp tục mua hàng</a>
    @if(Session::has('cart') && $carts->totalQty > 0)
        <a href="{{route('products.index')}}" id="btnPayment" class="btn btn-warning">Thanh toán</a>
        <div style="float: right">
            <p style="font: initial;font-size: larger;font-weight: bolder; padding-right: 20px">Tổng
                tiền: <span
                    id="totalPrice">{{number_format($carts->totalPrice)}}</span>đ</p>
        </div>
    @endif
</div>
