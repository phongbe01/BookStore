<div class="modal fade" id="publisher-ajaxModel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="publisherForm" name="publisherForm" class="form-horizontal" method="post" action="{{route('publishers.store')}}" enctype="multipart/form-data">
{{--                    @csrf--}}
                    <input type="hidden" name="id" id="form_publisher_id">
                    <div class="form-group">
                        <label  class="col-sm-5 control-label">Publisher Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="form_publisher_name" name="publishname" placeholder="Enter publisher name" autofocus
                                   maxlength="50">
                        </div>
                        <span class="error_message col-sm-12" id="error_publisher_name"></span>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-5">Image</label>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="form_publisher_image"  name="file">
                                <label class="custom-file-label" for="form_publisher_image" id="file-name">Choose file...</label>
                            </div>
                        </div>
                        <span class="error_message col-sm-12" id="error_publisher_image"></span>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10 mt-3">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
