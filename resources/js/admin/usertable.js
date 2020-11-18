$(document).ready(function () {

    //show sidebar
    // showSidebar();

    //show/hide password
    showAndHidePassword();

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    let first = 1;
    let last = 10;
    let pageNumber = 0;
    let lastIndex = 10;
    let pageSize = 10;
    let filterArray = [];
    let timeout = null;

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

    function drawTable(arr) {
        $('.data-table-body').empty('');
        let user_data = '';
        $.each(arr, function () {
            user_data += '<tr class="">';
            user_data += '<td class="id-column" data-id="' + this.id + '">' + this.id + '</td>';
            user_data += '<td class="action-column">'
            user_data += '<a href=""><span class="lv-data-table-icon fas fa-edit lv-data-table-edit form-edit" ></span></a>';
            user_data += '<a href=""><span class="lv-data-table-icon far fa-trash-alt lv-data-table-trash form-delete" data-delete="' + this.id + '"></span></a>';
            user_data += '</td>';
            user_data += '<td class="first-name-column">' + this.firstname + '</td>';
            user_data += '<td class="last-name-column">' + this.lastname + '</td>';
            user_data += '<td class="role-column">' + this.role + '</td>';
            user_data += '<td class="email-column">' + this.email + '</td>';
            user_data += '</tr>';
        })
        $('.data-table-body').append(user_data);
    }

    function handlingEvent() {
        clearTimeout(timeout);
        let array = [];
        filterArray = [];
        timeout = setTimeout(function () {
            let params = $('.input-search');
            $.each(params, function (key, value) {
                let str = value.id;
                let param = {
                    field: str.substr(7),
                    value: $(value).val(),
                }
                array.push(param);
                filterArray.push(param);
            })
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {
                    params: array,
                    pageSize: pageSize,
                    pageNumber: 0,
                },
                url: '/admin/management/users/search',
                success: function (data) {
                    if (data != null) {
                        // $('.loading-table').hide();
                        let users = data.key;
                        drawTable(users);
                        $('#total').html(data.count);
                        $('.btn-delete').attr('hidden', true);
                    } else {

                    }
                },
                error: function () {
                }
            });
        }, 500);
    }


    $('.input-search').bind(' keyup change', function () {
        pageSize = $(this).parents('.card').find('#pageSize').val();
        first = 1;
        pageNumber = 0;
        // $('.loading-table').show();
        last = parseInt(pageSize);
        $('#first').text(first);
        $('#last').text(pageSize);
        handlingEvent();

    });

    $('#pageSize').on('change', function () {
        pageSize = parseInt($(this).val());
        first = 1;
        last = parseInt(pageSize);
        pageNumber = 0;
        $('.link-next').prop('disabled', false);
        $.ajax({
            data: {
                pageSize: pageSize,
                params: filterArray,
                pageNumber: pageNumber,
            },
            url: '/admin/management/users/search',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                let users = data.key;
                let total = data.count;
                lastIndex = parseInt(data.lastIndex);
                drawTable(users);
                $('#total').html(total);
                $('#first').text(first);
                $('#last').text(pageSize);
            }
        });
    });

    $(document).on('click', '.link-back', function () {
        if (first > 1) {
            $('.link-next').prop('disabled', false);
            pageNumber = parseInt(pageNumber) - parseInt(pageSize);
            let left = $('.link-back');
            $.ajax({
                data: {
                    pageSize: pageSize,
                    params: filterArray,
                    pageNumber: pageNumber,
                },
                url: 'users/search',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    let users = data.key;
                    let total = data.count;
                    first = parseInt(pageNumber) + 1;
                    last = parseInt(pageNumber) + parseInt(pageSize);
                    left.parents('.page').find('#first').text(first);
                    left.parents('.page').find('#last').text(last);
                    drawTable(users);
                    $('#total').html(total);
                    if (first <= 1) {
                        $('.link-back').prop('disabled', true);
                    } else {
                        left.prop('disabled', false);
                    }
                }
            });
        }
    })

    $(document).on('click', '.link-next', function () {
        $('.link-back').prop('disabled', false);
        pageSize = $(this).parents('.page').find('#pageSize').val();
        pageNumber += parseInt(pageSize);
        let right = $('.link-next');
        $.ajax({
            data: {
                pageSize: pageSize,
                params: filterArray,
                pageNumber: pageNumber,
            },
            url: '/admin/management/users/search',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                let users = data.key;
                let total = data.count;
                lastIndex = parseInt(data.lastIndex);
                first = parseInt(pageNumber) + 1;
                last = parseInt(pageNumber) + parseInt((parseInt(lastIndex) < parseInt(pageSize)) ? lastIndex : pageSize);
                right.parents('.page').find('#first').text(first);
                right.parents('.page').find('#last').text(last);
                drawTable(users);
                $('#total').html(total);
                if (last === total) {
                    right.prop('disabled', true);
                } else {
                    right.prop('disabled', false);
                }
            }
        });

    })

    function showSidebar() {
        $('.toggle').on('click', function () {
            $('.navigation').toggleClass('active');
            $('.content-wrapper').toggleClass('active');
        })
    }

    //validate form
    function validator() {
        let form = $('#userForm');
        let firstname = form.find('#form_firstname');
        let lastname = form.find('#form_lastname');
        let email = form.find('#form_email');
        let password = form.find('#form_password');
        let check = 0;

        if (firstname != null) {
            if (firstname.val() == null || firstname.val() === '') {
                hideAndShowErrorMessage(firstname, '* Tên không được để trống');
                firstname.focus();
                check = 1;
            } else {
                check = 0;
            }
        }
        if (lastname != null) {
            if (lastname.val() == null || lastname.val() === '') {
                hideAndShowErrorMessage(lastname, '* Tên không được để trống');
                lastname.focus();
                check = 1;
            } else {
                check = 0;
            }
        }
        if (email != null) {
            if (email.val() == null || email.val() === '') {
                hideAndShowErrorMessage(email, '* Email không được để trống');
                email.focus();
                check = 1;
            } else {
                check = 0;
            }
        }
        if (password != null) {
            if (password.val() == null || password.val() === '') {
                hideAndShowErrorMessage(password, '* Password không được để trống');
                firstname.focus();
                check = 1;
            }

        } else {
            check = 0;
        }
        if (check === 1) {
            return false;
        } else {
            return true;
        }
    }

    function showAndHidePassword() {
        let eyes = $('.toggle-password');
        if (eyes != null) {
            eyes.on('click', function () {
                let input = eyes.parents('.input-password').find("#form_password");
                // let input = document. getElementById('password');
                if (input.attr('type') === 'password') {
                    eyes.removeClass('hide-password');
                    eyes.addClass('show-password');
                    input.prop('type', 'text');
                } else {
                    eyes.removeClass('show-password');
                    eyes.addClass('hide-password');
                    input.prop('type', 'password');
                }
            })
        }
    }


    //create
    $(document).on('click', '#createNewUser', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $.get("users/create", function (data) {
            let roles = data.role;
            $('#saveBtn').val("create-user");
            $('#userForm').trigger("reset");
            $('#modelHeading').html("Create New User");
            $('#ajaxModel').modal('show');
            $('#userForm').find('.input-password').show();
            $("#role_user").empty();
            $.each(roles, function () {
                $("#role_user").append('<option value="' + this.id + '">' + this.rolename + '</option>');
            });
        });
    });

    //edit
    $(document).on('click', '.form-edit', function (e) {
        e.preventDefault();
        let id = $(this).parents('tr').find('.id-column').data('id');
        $.get("users/" + id + '/edit', function (data) {
            let roles = data.role;
            let user = data.user;
            $('#saveBtn').html("edit-user");
            $('#modelHeading').html("Edit User");
            $('#ajaxModel').modal('show');

            // $('#userForm').find('.input-password').remove();
            $('#form_user_id').val(user.id);
            $('#form_firstname').val(user.firstname);
            $('#form_lastname').val(user.lastname);
            $('#form_email').val(user.email);
            $('#form_password').val(user.password);
            $('#userForm').find('.input-password').hide();
            $("#role_user").empty();
            $.each(roles, function () {
                $("#role_user").append('<option value="' + this.id + '">' + this.rolename + '</option>');
            })
            $("#role_user").val(user.role);
        });
        $('#userForm').trigger("reset");
    })

    //saveBtn
    $('#saveBtn').on('click', function (e) {
        e.preventDefault();
        if (validator()) {
            $(this).text('Sending..');
            $.ajax({
                data: $('#userForm').serialize(),
                url: "users",
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if ($.isEmptyObject(data.error)) {
                        $('#userForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('.print-error-msg').hide();
                        let users = data.users;
                        drawTable(users);
                        $('#total').html(data.count);
                        $('#pageSize').val(10);
                        $('#first').text(1);
                        $('#last').text(10);
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

    //delete
    $(document).on('click', '.form-delete', function () {
        let id = $(this).parents('tr').find('.id-column').data('id');
        confirm("Bạn có muốn xóa tài khoản số " + id +" này?");
        $.ajax({
            type: "DELETE",
            url: "users/" + id,
            success: function (data) {
                if ($.isEmptyObject(data.error)) {
                    $('#userForm').trigger("reset");
                    $('.print-error-msg').hide();
                    let users = data.users;
                    drawTable(users);
                    $('#total').html(data.count);
                    $('#pageSize').val(10);
                    $('#first').text(1);
                    $('#last').text(10);
                    pageNumber = 0;
                    alertMessage('success', data.success);
                } else {
                    alertMessage('error', data.error);
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


})
