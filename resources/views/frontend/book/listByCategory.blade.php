@extends('layouts.app')
@section('content')
    <div class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="font-size: 1em">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$books->first()->category}}</li>
            </ol>
        </nav>
        <div class="section group">
            @foreach($books as $book)
                <div class="grid_1_of_4 images_1_of_4">
                    <a href="{{route('products.show', $book->id)}}"><img src="{{asset('/storage/' . $book->image)}}"
                                                                          alt="$book->image"/></a>
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
    <script type="text/javascript">
        $(document).ready(function () {
            // $().UItoTop({easingType: 'easeOutQuart'});
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        function addToCart(id) {
            $.ajax({
                url: 'http://127.0.0.1:8000/add-to-cart/' + id,
                dataType: 'json',
                type: 'get',
                success: function (data) {
                    $('#total').text(data.total);
                    alert("Thêm vào giỏ hàng thành công");
                }
            })
        }
    </script>
@endsection
