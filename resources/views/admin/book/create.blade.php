@extends('admin.layouts.head')
@section('content')
    <div class="">
        <div>
            <h2>Tạo mới sách</h2>
        </div>
        <div>
            <form id="bookForm" name="bookForm" class="form-horizontal" method="post"
                  style="border: 1px solid lightgrey; padding: 20px"
                  action="{{route('books.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="form_book_id">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Tên sách</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="form_title_name" name="title"
                                       placeholder="Nhập tên sách" autofocus
                                       maxlength="50">
                            </div>
                            @error('title')
                            <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Nội dung</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" id="form_summary_name" name="summary" rows="4" cols="50"
                                      placeholder="Nhập nội dung" autofocus
                            ></textarea>
                            </div>
                            <span class="error_message col-sm-12" id="error_summary_name"></span>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Tác giả</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="authorID" name="authorID">
                                            <option value="" default></option>
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->authorname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('authorID')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Nhà xuất bản</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" id="publisherID" name="publisherID">
                                            <option value="" default></option>
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
                                        <select class="form-control" id="categoryID" name="categoryID">
                                            <option value="" default></option>
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
                                               name="price" placeholder="Nhập giá" autofocus
                                               maxlength="50">
                                    </div>
                                    @error('price')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror                                </div>
                                <div class="col-4">
                                    <label class="col-sm-12 control-label">Số lượng</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="form_quantity"
                                               name="quantity" placeholder="Nhập số lượng" autofocus
                                               maxlength="50">
                                    </div>
                                    @error('quantity')
                                    <span class="error_message col-sm-12" id="error_title_name">{{$message}}</span>
                                    @enderror                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <label for="" class="col-sm-5">Ảnh</label>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="form_book_image" name="file">
                                <label class="custom-file-label" for="form_publisher_image" id="file-name">Choose
                                    file...</label>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-5">
                            <img id="showImage" class="pb-2" src="" alt=""
                                 style="width: 200px; height: 300px; display: none;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-10 mt-3">
                    <a class="btn btn-primary pr-4" id="saveBtn" href="{{route('books.index')}}">Quay lại
                    </a>
                    <button type="submit" class="btn btn-success" id="saveBtn" value="create">Tạo mới
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#showImage').hide();

            function readURL(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $('#bookForm').find('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
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

