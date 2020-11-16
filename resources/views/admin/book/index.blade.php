@extends('admin.layouts.head')
@section('content')
    <section class="content">
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class=" m-2">
            <div class="row table-title ">
                <div class="col-6">
                    <h4>Sách</h4>
                </div>
                <div class="col-6 toolbar">
                    <div class="btn-toolbar btn-group" role="toolbar" style="float: right">
                        <div class="btn-group func mr-3" role="group" aria-label="First group">
                            <button type="button" class="btn btn-plus " id="createNewBook"><i class="fas fa-plus" style="color: black"></i>
                            </button>
                            <button type="button" class="btn "><i class="fas fa-upload mr-1"></i>Nhập
                            </button>
                            <button type="button" class="btn "><i class="fas fa-download mr-1"></i>Xuất
                                Excel
                            </button>
                            <button type="button" class="btn btn-cog"><i
                                    class="fas fa-cog mr-1"></i>Tùy chỉnh
                            </button>
                        </div>
                        <div class="btn-group func" role="group" aria-label="Third group">
                            <button type="button" class="btn ">...</button>
                        </div>

                    </div>
                    <div class="btn-group btn-delete func" role="group" aria-label="Third group" hidden>
                        <button type="button" class="btn">Xóa</button>
                    </div>
                </div>
            </div>
            <div id="table-scroll" class="table-scroll">
                <div class="table-wrap">
                    <table class="data-table">
                        <thead class="data-table-head">
                        <tr style="display: flex; align-items: center">
                            <th class="action-column">Hành động</th>
                            <th class="publisher-name-column">Tên sách</th>
                            <th class="id-column">Giá</th>
                            <th class="id-column">Số lượng</th>
                            <th class="publisher-name-column">Tác giả</th>
                            <th class="publisher-name-column">Nhà xuất bản</th>
                            <th class="publisher-name-column">Phân loại</th>
                        </tr>
                        <tr>
                            <th class="action-column"></th>
                            <th class="publisher-name-column"><input type="text" class="input-search data-filter "
                                                                     id="column_title"></th>
                            <th class="id-column">
                                <input type="text" class="input-search data-filter "
                                       id="column_price">
                            </th>
                            <th class="id-column">
                                <input type="text" class="input-search data-filter "
                                       id="column_quantity">
                            </th>
                            <th class="publisher-name-column">
                                <select  id="column_authorID" class="input-search data-filter">
                                    <option value="" selected></option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->authorname}}</option>
                                    @endforeach
                                </select>
                            </th>
                            <th class="publisher-name-column">
                                <select  id="column_publisherID" class="input-search data-filter">
                                    <option value="" selected></option>
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{$publisher->publishname}}</option>
                                    @endforeach
                                </select>
                            </th>
                            <th class="publisher-name-column">
                                <input type="text" class="input-search data-filter "
                                       id="column_category">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="data-table-body">
                        <div class="loading-table" style="display: none"></div>
                        @foreach($books as $book)
                            <tr>
                                <td class="action-column">
                                    <a href="javascript:void(0)"><span
                                            class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
                                    <a href="javascript:void(0)"><span
                                            class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
                                </td>
                                <td class="publisher-name-column">{{$book->title}}</td>
                                <td class="id-column">{{$book->price}}</td>
                                <td class="id-column">{{$book->quantity}}</td>
                                <td class="publisher-name-column">{{$book->author}}</td>
                                <td class="publisher-name-column">{{$book->publisher}}</td>
                                <td class="publisher-name-column">{{$book->category}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row mt-2" style="justify-content: space-between">
                    <div class="col-3 ml-2">
                        <span>Tổng kết quả <b id="total">{{$count}}</b></span>
                    </div>
                    <div class="col-6 page">
                        <div style="float:right; padding-right: 20px">
                            <span>Số bản ghi</span> <select name="" id="pageSize" class="pageSize mr-1">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <a class="link-back" disabled="true"><i class="fas fa-angle-double-left"></i></a>
                            <label id="first">1</label> -
                            <label id="last">10</label>
                            <a class="link-next"> <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('admin/booktable.js')}}" defer></script>
@endsection
