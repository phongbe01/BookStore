@extends('layouts.app')
@section('content')
    @include('layouts.sidebar')
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm mới</h3>
            </div>
            <div class="see">
                <p><a href="#">Xem tất cả</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($novels as $novel)
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="{{route('products.show', $novel->id)}}"><img src="{{asset('/storage/' . $novel->image)}}"
                                    alt="$novel->image"/></a>
                    <h2>{{$novel->title}}</h2>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees">{{number_format($novel->price)}}đ </span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="javascript:void(0)" class="add-to-cart" data-id="{{$novel->id}}"
                                   onclick="addToCart({{$novel->id}})">Thêm vào giỏ</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>Sản phẩm hot</h3>
            </div>
            <div class="see">
                <p><a href="#">Xem tất cả</a></p>
            </div>
            <div class="clear"></div>
        </div>
        l
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="image/book/thieunhi/nuoc-co-hoa_106191_1.png" alt=""/></a>
                <h2>Nước cờ hòa</h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">75.000đ </span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="image/book/kinhte/vong-quay-tien-mat_108808_1.jpg" alt=""/></a>
                <h2>Vòng quay tiền mặt</h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">300.000đ </span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="image/book/chinhtri/tu-bi_108846_1.jpg" alt=""/></a>
                <h2>Từ bi </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">250.000đ </span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="image/book/vanhoc/se-co-cach-dung-lo-_48341_1.jpg" alt=""/></a>
                <h2>Sẽ có cách đừng lo </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">50.000đ </span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function addToCart(id) {
            $.get('add-to-cart/' + id, function (data) {
                $('#total').text(data.total);
            })
        }

        $(document).ready(function () {
            // $().UItoTop({easingType: 'easeOutQuart'});
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-toke n"]').attr('content')
                }
            });

        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
@endsection
