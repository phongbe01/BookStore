$(document).ready(function() {

    create();

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
                url: '/admin/management/books/search',
                success: function (data) {
                    let body = $('.data-table-body');
                    body.html('');
                    body.append(data.table);
                    let total = data.count;
                    $('#total').html(total);
                },
                error: function () {
                }
            });
        }, 100);
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
            url: '/admin/management/books/search',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                let body = $('.data-table-body');
                body.html('');
                body.append(data.table);
                let total = data.count;
                lastIndex = parseInt(data.lastIndex);
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
                url: 'books/search',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    let total = data.count;
                    first = parseInt(pageNumber) + 1;
                    last = parseInt(pageNumber) + parseInt(pageSize);
                    left.parents('.page').find('#first').text(first);
                    left.parents('.page').find('#last').text(last);
                    let body = $('.data-table-body');
                    body.html('');
                    body.append(data.table);
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
            url: 'books/search',
            type: 'post',
            dataType: 'json',
            success: function (data) {
                let total = data.count;
                lastIndex = parseInt(data.lastIndex);
                first = parseInt(pageNumber) + 1;
                last = parseInt(pageNumber) + parseInt((parseInt(lastIndex) < parseInt(pageSize)) ? lastIndex : pageSize);
                right.parents('.page').find('#first').text(first);
                right.parents('.page').find('#last').text(last);
                let body = $('.data-table-body');
                body.html('');
                body.append(data.table);
                $('#total').html(total);
                if (last === total) {
                    right.prop('disabled', true);
                } else {
                    right.prop('disabled', false);
                }
            }
        });
    })

    function create()
    {
        $(document).on('click', '#createNewBook', function (e) {
            $.get("books/create", function (data) {
                let body = $('body');
                body.html(data);
                window.history.pushState("Details", "Title", "books/create");
                // let form = $('#book-ajaxModel');
                // form.modal('show');
            })
        })
    }
});
