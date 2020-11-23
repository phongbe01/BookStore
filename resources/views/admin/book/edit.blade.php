@extends('admin.layouts.head')
@section('content')
    <div>
        <div style="padding: 10px"><h2>Chỉnh sửa</h2></div>
        <div style="padding: 20px; border: 1px solid lightgrey">
            <form id="bookForm" name="bookForm" class="form-horizontal" method="post"
                  action="{{route('books.update', $book->id)}}"
                  enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <input type="hidden" name="id" id="form_publisher_id">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Tên sách</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="form_title" name="title"
                                       value="{{$book->title}}">
                            </div>
                            @error('title')
                            <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                            @enderror                       </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label">Nội dung</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" id="form_summary" name="summary" rows="4" cols="50"
                                      autofocus
                            >{{$book->summary}}</textarea>
                            </div>
                            <span class="error_message col-sm-12" id="error_summary_name"></span>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Tác giả</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="author" name="authorID">
                                            <option value="" default="{{$book->author}}">{{$book->author}}</option>
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->authorname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('authorID')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror                               </div>
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Nhà xuất bản</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="publisher" name="publisherID">
                                            <option value="" default="">{{$book->publisher}}</option>
                                            @foreach($publishers as $publisher)
                                                <option value="{{$publisher->id}}">{{$publisher->publishname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('publisherID')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Phân loại</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="category" name="categoryID">
                                            <option value="" default="">{{$book->category}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->categoryname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('categoryID')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Giá </label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="form_price"
                                               name="price" placeholder="Nhập giá" autofocus value="{{$book->price}}"
                                               maxlength="50">
                                    </div>
                                    @error('price')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror                               </div>
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Số lượng</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="form_quantity"
                                               name="quantity" placeholder="Nhập số lượng" autofocus
                                               value="{{$book->quantity}}"
                                               maxlength="50">
                                    </div>
                                    @error('quantity')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <label for="" class="col-sm-5">Ảnh</label>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="form_book_image" name="file" value="">
                                <input type="hidden" class="custom-file-input" id="photo" name="photo" value="">
                                <label class="custom-file-label" for="form_publisher_image" id="file-name">Choose
                                    file...</label>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-5">
                            <img id="showImage" class="pb-2" src="{{asset('/storage/' . $book->image)}}" alt=""
                                 style="width: 200px; height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10 mt-3">
                    <a class="btn btn-primary pr-4" id="saveBtn" href="{{route('books.index')}}">Quay lại
                    </a>
                    <button type="submit" class="btn btn-success" id="saveBtn" value="create">Thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $('#bookForm').find('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    $('#photo').val(input.files[0].name);
                }
            }

            displayImageToModal();

            function displayImageToModal() {
                $(document).on('change', '#form_book_image', function () {
                    $('#showImage').show();
                    readURL(this);
                })
            }
        })
    </script>
@endsection
