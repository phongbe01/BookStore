@extends('layouts.app')
@section('content')
    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">
                <div class="logo">
                    <a href="index.html"><img src="image/book.jpg" style="width: 60px;height: 60px;" alt=""/></a>
                </div>
                <div class="call">
                    <p><span>Liên hệ:</span> <span class="number">84-888-66124</span></p>
                </div>
                <div class="account_desc">
                    <ul class="">
                        <!-- Authentication Links -->
                        @guest
                            <li class="">
                                <a class="" href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="" href="{{ route('register') }}">Đăng ký</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">
                <div class="cart">
                <span>Giỏ hàng:</span>
                    <div id="dd" class="wrapper-dropdown-2"> 0 sản phẩm
                        <ul class="dropdown">
                            <li></li>
                        </ul>
                    </div>
                    </p>
                </div>
                <script type="text/javascript">
                    function DropDown(el) {
                        this.dd = el;
                        this.initEvents();
                    }

                    DropDown.prototype = {
                        initEvents: function () {
                            var obj = this;

                            obj.dd.on('click', function (event) {
                                $(this).toggleClass('active');
                                event.stopPropagation();
                            });
                        }
                    }

                    $(function () {

                        var dd = new DropDown($('#dd'));

                        $(document).click(function () {
                            // all dropdowns
                            $('.wrapper-dropdown-2').removeClass('active');
                        });

                    });

                </script>
                <div class="clear"></div>
            </div>
            <div class="header_bottom">
                <div class="menu">
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="">Tin tức</a></li>
                        <li><a href="">Sản phẩm</a></li>
                        <li><a href="">Liên hệ</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header_slide">
                <div class="header_bottom_left">
                    <div class="categories">
                        <ul>
                            <h3>Thể loại</h3>
                            <li><a href="#">Chính trị</a></li>
                            <li><a href="#">Kinh tế</a></li>
                            <li><a href="#">Kĩ năng sống</a></li>
                            <li><a href="#">Thiếu nhi</a></li>
                            <li><a href="#">Tri thức</a></li>
                            <li><a href="#">Văn học</a></li>
                            <li><a href="#">Khoa học</a></li>
                            <li><a href="#">Truyện</a></li>
                            <li><a href="#">Tiểu thuyết</a></li>
                            <li><a href="#">Văn hóa xã hội</a></li>
                            <li><a href="#">Lịch sử</a></li>
                            <li><a href="#">Giáo trình</a></li>
                            <li><a href="#">Tâm lý</a></li>

                        </ul>
                    </div>
                </div>
                <div class="header_bottom_right">
                    <div class="slider">
                        <div id="slider">
                            <div id="mover">
                                <div id="slide-1" class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="image/sach-kinh-te.png"
                                                                    style="width: 350px;height: 420px;"
                                                                    alt="learn more"/></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>HOT<br><span>SALE</span></h1>
                                        <h2>UPTo 20%</h2>
                                        <div class="features_list">
                                            <h4>Tìm hiểu thêm</h4>
                                        </div>
                                        <a href="preview.html" class="button">Mua ngay</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-text">
                                        <h1>HOT<br><span>SALE</span></h1>
                                        <h2>UPTo 40%</h2>
                                        <div class="features_list">
                                            <h4>Khi thanh toán online</h4>
                                        </div>
                                        <a href="preview.html" class="button">Mua ngay</a>
                                    </div>
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="image/vh-vtp-truyen-ngan-nho.jpg"
                                                                    alt="learn more"
                                                                    style="width: 350px;height: 420px;"/></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="slide">
                                    <div class="slider-img">
                                        <a href="preview.html"><img src="image/doremon.jpg" alt="learn more"
                                                                    style="width: 400px;height: 420px;"/></a>
                                    </div>
                                    <div class="slider-text">
                                        <h1>HOT<br><span>SALE</span></h1>
                                        <h2>UPTo 10%</h2>
                                        <div class="features_list">
                                            <h4>Tìm hiểu thêm</h4>
                                        </div>
                                        <a href="preview.html" class="button">Mua ngay</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="main">
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
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview.html"><img src="image/book/kinhte/duong-den-thanh-cong-cua-jack-ma_50720_1.jpg"
                                                    alt=""/></a>
                        <h2>Đường đến thành công</h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">200.000đ </span></p>
                            </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview.html"><img src="image/book/vanhoc/nguoi-sai-gon-bat-dac-di_75172_1.jpg"
                                                    alt=""/></a>
                        <h2>Người Sài Gòn bất đắc dĩ </h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">115.000đ </span></p>
                            </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview.html"><img src="image/book/chinhtri/muon-kiep-nhan-sinh_107747_1.png" alt=""/></a>
                        <h2>Muôn kiếp nhân sinh</h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">150.000đ</span></p>
                            </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="preview.html"><img src="image/book/kynangsong/cang-ky-luat-cang-tu-do_109147_1.jpg"
                                                    alt=""/></a>
                        <h2>Càng kỷ luật càng tự do </h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">250.000đ</span></p>
                            </div>
                            <div class="add-cart">
                                <h4><a href="preview.html">Thêm vào giỏ</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
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
        </div>
    </div>
    <div class="footer">
        <div class="wrap">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="delivery.html">Orders and Returns</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Why buy from us</h4>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Customer Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="contact.html">Site Map</a></li>
                        <li><a href="#">Search Terms</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>My account</h4>
                    <ul>
                        <li><a href="contact.html">Sign In</a></li>
                        <li><a href="index.html">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="contact.html">Help</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h4>Contact</h4>
                    <ul>
                        <li><span>+91-123-456789</span></li>
                        <li><span>+00-123-000000</span></li>
                    </ul>
                    <div class="social-icons">
                        <h4>Follow Us</h4>
                        <ul>
                            <li><a href="#" target="_blank"><img src="images/facebook.png" alt=""/></a></li>
                            <li><a href="#" target="_blank"><img src="images/twitter.png" alt=""/></a></li>
                            <li><a href="#" target="_blank"><img src="images/skype.png" alt=""/> </a></li>
                            <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt=""/></a></li>
                            <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt=""/></a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>&copy; 2020 Book-Store. | Design by CNTT1</p>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $().UItoTop({easingType: 'easeOutQuart'});

        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
@endsection
