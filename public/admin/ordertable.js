$(document).ready(function () {

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

    $('.input-search').bind(' keyup change', function () {
        pageSize = $(this).parents('.card').find('#pageSize').val();
        first = 1;
        pageNumber = 0;
        $('.loading-table').show();
        last = parseInt(pageSize);
        $('#first').text(first);
        $('#last').text(pageSize);
        handlingEvent();

    });

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
            });
            console.log(array);
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {
                    params: array,
                    pageSize: pageSize,
                    pageNumber: 0,
                },
                url: '/admin/management/orders/search',
                success: function (data) {
                    if (data != null) {
                        let body = $('.data-table-body');
                        body.html('');
                        body.append(data.key);
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
})
