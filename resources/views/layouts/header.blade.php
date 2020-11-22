<div class="headertop_desc">
    <div class="logo">
        <a href="index.html"><img src="{{asset('image/book.jpg')}}" style="width: 60px;height: 60px;" alt=""/></a>
    </div>
    <div class="call">
        <a href="tel:0866688124"><i class="fas fa-mobile-alt"></i> <span class="number">+84-8666-88124</span></a>
    </div>
    <div class="cart">
        <a href="{{route('cart.index')}}" style="color: red"><i class="fas fa-shopping-cart"><span id="total"
                                                                                                   class="badge qty">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></i></a>
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
                <li class="dropdown">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->firstname }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if(Auth::user()->role  == 1)
                            <a href="{{route('management.index')}}" class="dropdown-item p-2">Quản lý</a>
                        @endif
                        <a href="" class="dropdown-item p-2">Thông tin khách hàng</a>
                        <a href="{{route('users.listBill')}}" class="dropdown-item p-2">Thông tin hóa đơn</a>
                        <a class="dropdown-item p-2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Đăng xuất
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
                {{--                <li class="nav-item dropdown">--}}
                {{--                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--                        {{ Auth::user()->firstname }} <span class="caret"></span>--}}
                {{--                    </a>--}}

                {{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"  style="transform: none !important; top: 20px!important">--}}
                {{--                        <a class="dropdown-item p-2" href="{{ route('logout') }}"--}}
                {{--                           onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                            {{ __('Logout') }}--}}
                {{--                        </a>--}}

                {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
                {{--                              style="display: none;">--}}
                {{--                            @csrf--}}
                {{--                        </form>--}}
                {{--                        <a href="" class="dropdown-item p-2">Thong tin khach hang</a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
            @endguest
        </ul>
    </div>
    <div class="clear"></div>
</div>
{{--            <div class="header_top">--}}
{{--               --}}
{{--                <script type="text/javascript">--}}
{{--                    function DropDown(el) {--}}
{{--                        this.dd = el;--}}
{{--                        this.initEvents();--}}
{{--                    }--}}

{{--                    DropDown.prototype = {--}}
{{--                        initEvents: function () {--}}
{{--                            var obj = this;--}}

{{--                            obj.dd.on('click', function (event) {--}}
{{--                                $(this).toggleClass('active');--}}
{{--                                event.stopPropagation();--}}
{{--                            });--}}
{{--                        }--}}
{{--                    }--}}

{{--                    $(function () {--}}

{{--                        var dd = new DropDown($('#dd'));--}}

{{--                        $(document).click(function () {--}}
{{--                            // all dropdowns--}}
{{--                            $('.wrapper-dropdown-2').removeClass('active');--}}
{{--                        });--}}

{{--                    });--}}

{{--                </script>--}}
{{--                <div class="clear"></div>--}}
{{--            </div>--}}
<div class="header_bottom">
    <div class="menu">
        <ul>
            <li><a href="{{route('home')}}">Trang chủ</a></li>
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
