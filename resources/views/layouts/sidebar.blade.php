<div class="header_slide">
    <div class="header_bottom_left">
        <div class="categories">
            <ul>
                <h3>Thể loại</h3>
                @foreach($categories as $item)
                    <li><a href="{{route('products.listByCategory', $item->id)}}" class="category-links" id="{{$item->id}}">{{$item->categoryname}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="header_bottom_right">
        <div class="slider">
            <div id="slider">
                <div id="mover">
                    <div id="slide-1" class="slide">
                        <div class="slider-img">
                            <a href="preview.html"><img src="{{asset('image/sach-kinh-te.png')}}"
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
                            <a href="preview.html"><img src="{{asset('image/vh-vtp-truyen-ngan-nho.jpg')}}"
                                                        alt="learn more"
                                                        style="width: 350px;height: 420px;"/></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="slide">
                        <div class="slider-img">
                            <a href="preview.html"><img src="{{asset('image/doremon.jpg')}}" alt="learn more"
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
