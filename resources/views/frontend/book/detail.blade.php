@extends('layouts.app')
@section('content')
    <div class="section group">
        <div class="cont-desc span_1_of_2">
            <div class="product-details row">
                <div class="grid images_3_of_2 col-5">
                    <a href="#" target="_blank"><img src="{{asset('/storage/' . $book->image)}}" alt=" " /></a>
                </div>
                <div class="desc span_3_of_2 col-6">
                    <h2>{{$book->title}}</h2>
                    <p>{{$book->summary}}</p>
                    <div class="price">
                        <p>Giá: <span>{{number_format($book->price)}}đ </span></p>
                    </div>
                    <div class="available">
                        <p>Tùy chọn có sẵn :</p>
                        <ul>
{{--                            <li>Truyện màu:--}}
{{--                                <select>--}}
{{--                                    <option>Có</option>--}}
{{--                                    <option>Không</option>--}}

{{--                                </select></li>--}}
{{--                            <li>Kích cỡ:<select>--}}
{{--                                    <option>Nhỏ</option>--}}
{{--                                    <option>Trung bình</option>--}}
{{--                                    <option>Lớn</option>--}}

{{--                                </select></li>--}}
                            <li>Số lượng:<select class="custom-select" name="qty" style="width: 20%">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select></li>
                        </ul>
                    </div>
                    <div class="share-desc">
{{--                        <div class="share">--}}
{{--                            <p>Chia sẻ sản phẩm:</p>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#"><img src="image/facebook.png" alt="" /></a></li>--}}
{{--                                <li><a href="#"><img src="image/twitter.png" alt="" /></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="button"><span><a href="#">Thêm vào giỏ</a></span></div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="clear"></div>
            </div>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
            </script>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Sản phẩm liên quan</h3>
                </div>
                <div class="see">
                    <p><a href="#">Xem tất cả</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">

                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="image/conan.jpg" style="width: 400px;height: 250px;" alt=""></a>
                    <div class="price" style="border:none">
                        <div class="add-cart" style="float:none">
                            <h4><a href="#">Thêm vào giỏ</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="image/conan.jpg" style="width: 400px;height: 250px;" alt=""></a>
                    <div class="price" style="border:none">
                        <div class="add-cart" style="float:none">
                            <h4><a href="#">Thêm vào giỏ</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="image/conan.jpg" style="width: 400px;height: 250px;" alt=""></a>
                    <div class="price" style="border:none">
                        <div class="add-cart" style="float:none">
                            <h4><a href="#">Thêm vào giỏ</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="#"><img src="image/conan.jpg" style="width: 400px;height: 250px;" alt=""></a>
                    <div class="price" style="border:none">
                        <div class="add-cart" style="float:none">
                            <h4><a href="#">Thêm vào giỏ</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
