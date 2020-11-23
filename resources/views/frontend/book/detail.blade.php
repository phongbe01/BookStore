@extends('layouts.app')
@section('content')
    <div class="section group">
        <div class="cont-desc">
            <div class="product-details row">
                <div class="grid images_3_of_2 col-4">
                    <a href="#" target="_blank"><img src="{{asset('/storage/' . $book->image)}}" alt=" "/></a>
                </div>
                <div class="desc span_3_of_2 col-7">
                    <h2>{{$book->title}}</h2>
                    <p>{{$book->summary}}</p>
                    <div class="price">
                        <p>Giá: <span>{{number_format($book->price)}}đ</span></p>
                    </div>
                    <div class="row available">
                        <div class="col-4">
                            <p>Tùy chọn:</p>
                            <ul>
                                <li>Số lượng:<select class="custom-select" name="qty" id="qty" style="width: 50%">
                                        <option selected>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></li>
                            </ul>
                        </div>
                        <div class="share-desc col-8">
                            <div class="button"><h4><a href="" id="addToCart" data-id="{{$book->id}}">Thêm vào giỏ</a>
                                </h4></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Sản phẩm liên quan</h3>
                </div>
                <div class="see">
                    <p><a href="{{route('products.listByCategory', $book->categoryID)}}">Xem tất cả</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                @foreach($books as $book)
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="{{route('products.show', $book->id)}}"><img src="{{asset('/storage/' . $book->image)}}"
                                                                             alt="$novel->image"/></a>
                        <h2>{{$book->title}}</h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">{{number_format($book->price)}}đ </span></p>
                            </div>
                            <div class="add-cart">
                                <h4><a href="javascript:void(0)" class="add-to-cart" data-id="{{$book->id}}"
                                       onclick="addToCart({{$book->id}})">Thêm vào giỏ</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#addToCart').on('click', function (e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                let qty = $('#qty').val();
                console.log(id);
                $.ajax({
                    url: 'http://127.0.0.1:8000/add-to-cart/' + id,
                    dataType: 'json',
                    type: 'get',
                    data: {
                        qty: qty,
                    },
                    success: function (data) {
                        $('#total').text(data.total);
                        alert("Thêm vào giỏ hàng thành công");
                    }
                })
            })
        });
    </script>
@endsection
