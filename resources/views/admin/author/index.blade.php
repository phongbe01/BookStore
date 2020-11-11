@extends('admin.layouts.head')
@section('content')
    <section class="content">
        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class=" m-2">
            <div class="row table-title ">
                <div class="col-6">
                    <h4>Nhà Xuất Bản</h4>
                </div>
                <div class="col-6 toolbar">
                    <div class="btn-toolbar btn-group" role="toolbar" style="float: right">
                        <div class="btn-group func mr-3" role="group" aria-label="First group">
                            <button type="button" class="btn btn-plus " id="createNewPublisher"><i class="fas fa-plus" style="color: black"></i>
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
{{--            <div class="">--}}
{{--                <div class="">--}}
{{--                    <table class="data-table">--}}
{{--                        <thead class="data-table-head">--}}
{{--                        <tr style="display: flex; align-items: center">--}}
{{--                            <th class="id-column">ID</th>--}}
{{--                            <th class="action-column">Action</th>--}}
{{--                            <th class="publisher-name-column">Name</th>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <th class="id-column"></th>--}}
{{--                            <th class="action-column"></th>--}}
{{--                            <th class="publisher-name-column"><input type="text" class="input-search data-filter "--}}
{{--                                                                     id="column_publisher_name"></th>--}}
{{--                            <th class="column_image-column"></th>--}}
{{--                            </th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="data-table-body">--}}
{{--                        <div class="loading-table" style="display: none"></div>--}}
{{--                        @foreach($authors as $author)--}}
{{--                            <tr>--}}
{{--                                <td class="id-column" data-id="{{$author->id}}">{{$author->id}}</td>--}}
{{--                                <td class="action-column">--}}
{{--                                    <a href="javascript:void(0)"><span class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>--}}
{{--                                    <a href="javascript:void(0)"><span class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>--}}
{{--                                </td>--}}
{{--                                <td class="publisher-name-column">{{$author->authorname}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <div class="row mt-2" style="justify-content: space-between">--}}
{{--                    <div class="col-3 ml-2">--}}
{{--                        <span>Tổng kết quả <b id="total">{{$count}}</b></span>--}}
{{--                    </div>--}}
{{--                    <div class="col-6 page">--}}
{{--                        <div style="float:right; padding-right: 20px">--}}
{{--                            <span>Số bản ghi</span> <select name="" id="pageSize" class="pageSize mr-1">--}}
{{--                                <option value="10" selected>10</option>--}}
{{--                                <option value="25">25</option>--}}
{{--                                <option value="50">50</option>--}}
{{--                            </select>--}}
{{--                            <a class="link-back" disabled="true"><i class="fas fa-angle-double-left"></i></a>--}}
{{--                            <label id="first">1</label> ---}}
{{--                            <label id="last">10</label>--}}
{{--                            <a class="link-next"> <i class="fas fa-angle-double-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="zui-wrapper">
                <div class="zui-scroller">
                    <table class="zui-table">
                        <thead>
                        <tr>
                            <th class="zui-sticky-col">Name</th>
                            <th>Number</th>
                            <th>Position</th>
                            <th>Height</th>
                            <th>Born</th>
                            <th>Salary</th>
                            <th>Prior to NBA/Country</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="zui-sticky-col">DeMarcus Cousins</td>
                            <td>15</td>
                            <td>C</td>
                            <td>6'11"</td>
                            <td>08-13-1990</td>
                            <td>$4,917,000</td>
                            <td>Kentucky/USA</td>
                        </tr>
                        <tr>
                            <td class="zui-sticky-col">Isaiah Thomas</td>
                            <td>22</td>
                            <td>PG</td>
                            <td>5'9"</td>
                            <td>02-07-1989</td>
                            <td>$473,604</td>
                            <td>Washington/USA</td>
                        </tr>
                        <tr>
                            <td class="zui-sticky-col">Ben McLemore</td>
                            <td>16</td>
                            <td>SG</td>
                            <td>6'5"</td>
                            <td>02-11-1993</td>
                            <td>$2,895,960</td>
                            <td>Kansas/USA</td>
                        </tr>
                        <tr>
                            <td class="zui-sticky-col">Marcus Thornton</td>
                            <td>23</td>
                            <td>SG</td>
                            <td>6'4"</td>
                            <td>05-05-1987</td>
                            <td>$7,000,000</td>
                            <td>Louisiana State/USA</td>
                        </tr>
                        <tr>
                            <td class="zui-sticky-col">Jason Thompson</td>
                            <td>34</td>
                            <td>PF</td>
                            <td>6'11"</td>
                            <td>06-21-1986</td>
                            <td>$3,001,000</td>
                            <td>Rider/USA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{--    Modal  --}}
{{--        @include('admin.publisher.modal')--}}
        {{--    --}}
    </section>
@endsection
