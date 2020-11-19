<div class="headertop_desc">
    <div class="logo">
        <a href="index.html"><img src="{{asset('image/book.jpg')}}" style="width: 60px;height: 60px;" alt=""/></a>
    </div>
    <div class="call">
        <a href="tel:0866688124"><i class="fas fa-mobile-alt"></i> <span class="number">+84-8666-88124</span></a>
    </div>
    <div class="cart">
        <i class="fas fa-shopping-cart"><span id="total" class="badge qty">{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}</span></i>
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
                        {{ Auth::user()->firstname }} <span class="caret"></span>
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
