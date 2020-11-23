$(document).ready(function () {
    //create new publisher
    create();

    //edit publisher
    edit();

    // displayImageToModal();

    function readURL(input) {
        if (input.files && input.files[0])
        {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#publisherForm').find('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function displayImageToModal() {
        $(document).on('change', '#form_publisher_image', function () {
            $('#showImage').show();
            readURL(this);
        })
    }

    function drawTable(arr) {
        $('.data-table-body').empty('');
        let publisher_data = '';
        $.each(arr, function () {
            publisher_data += '<tr class="">';
            publisher_data += '<td class="id-column" data-id="' + this.id + '">' + this.id + '</td>';
            publisher_data += '<td class="action-column">'
            publisher_data += '<a href="javascript:void(0)"><span class="lv-data-table-icon fas fa-edit lv-data-table-edit form-edit" ></span></a>';
            publisher_data += '<a href="javascript:void(0)"><span class="lv-data-table-icon far fa-trash-alt lv-data-table-trash form-delete" data-delete="' + this.id + '"></span></a>';
            publisher_data += '</td>';
            publisher_data += '<td class="publisher-name-column">' + this.publishname + '</td>';
            publisher_data += '<td class="image-column"><img src="/storage/' + this.image + '" alt="' + this.image + '" style="width: 50px; height: 50px"></td>';
            publisher_data += '</tr>';
        })
        $('.data-table-body').append(publisher_data);
    }

    function alertMessage(type, title) {
        let alert = $('.alert');
        alert.show();
        alert.find('ul').html('');
        if (type === 'success') {
            alert.removeClass('alert-danger');
            alert.addClass('alert-success');
            alert.find('ul').append('<li>' + title + '</li>');
        }
        if (type === 'error') {
            alert.removeClass('alert-success');
            alert.addClass('alert-danger');
            $.each(title, function (key, value) {
                alert.find('ul').append('<li>' + value + '</li>');
            })
        }
        alert.fadeOut(9000);
    }

    function create() {
        $(document).on('click', '#createNewPublisher', function (e) {
            $.get("publishers/create", function (data) {
                $('#saveBtn').val("create-publisher");
                $('#publisherForm').trigger("reset");
                $('#modelHeading').html("Create New Publisher");
                $('#publisher-ajaxModel').modal('show');
                $('#showImage').hide();
                displayImageToModal();
            });
        });
    }

    function edit() {
        $(document).on('click', '.form-edit', function (e) {
            e.preventDefault();
            let id = $(this).parents('tr').find('.id-column').data('id');
            $.get("publishers/" + id + "/edit", function (data) {
                let pub = data.publisher;
                $('#saveBtn').html('edit-publisher');
                $('#modelHeading').html("Edit Publisher");
                $('#publisher-ajaxModel').modal('show');
                $('#showImage').show();
                $('#showImage').attr('src', '/storage/' + pub.image);
                $('#form_publisher_name').val(pub.publishname);
            });
            $('#publisherForm').trigger("reset");
        })
    }

    $(document).on('change', '#form_publisher_image', function () {
        let filename = this.files[0].name;
        $('#file-name').text(filename);
        $('#form-image').val(filename);
        $('#form_publisher_image').text(this.files[0].name);
    })

    function hideAndShowErrorMessage(input, text) {
        let parent = input.parents('.form-group');
        let span = parent.find('.error_message');
        input.addClass('error_border');
        //show
        span.html(text);
        //hide
        $(input).on('keyup', function () {
            // span.css('display', 'none');
            span.hide();
            input.removeClass('error_border');
        })
    }

    function validator() {
        let form = $('#publisherForm');
        let publisher_name = form.find('#form_publisher_name');
        let check = 0;

        if (publisher_name != null) {
            if (publisher_name.val() == null || publisher_name.val() === '') {
                hideAndShowErrorMessage(publisher_name, '* Tên không được để trống');
                publisher_name.focus();
                check = 1;
            } else {
                check = 0;
            }
        }
        if (check === 1) {
            return false;
        } else {
            return true;
        }
    }

    saveBtn
    $('#saveBtn').on('click', function (e) {
        e.preventDefault();
        if (validator()) {
            let p = $('#publisherForm');
            let fd = new FormData(p[0]);
            $(this).text('Sending..');
            $.ajax({
                data: fd,
                url: "publishers",
                type: 'post',
                dataType: 'json',
                processData: false,
                cache: false,
                contentType: false,
                success: function (data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#publisherForm').trigger("reset");
                        $('#publisher-ajaxModel').modal('hide');
                        $('.print-error-msg').hide();
                        let publishers = data.publishers;
                        drawTable(publishers);
                        $('#total').html(data.count);
                        $('#pageSize').val(10);
                        $('#first').text(1);
                        $('#last').text(10)
                        pageNumber = 0;
                        alertMessage('success', data.success);
                    } else {
                        alertMessage('error', data.error);
                    }
                },
                error: function (data) {
                    console.log(data.error);
                }

            });
        } else {
            console.log(2);
        }
    })

})
