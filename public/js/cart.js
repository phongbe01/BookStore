$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.txtQuantity').on('keyup', function () {
        let qty = parseInt($(this).val());
        let id = $(this).parents('tr').find('#product-id').attr('data-id');
        if (qty >= 1) {
            let total = $(this).parents('tr').find('.total');
            let price = $(this).parents('tr').find('.price').text();
            let param = {
                id: id,
                qty: qty,
            };
            $.ajax({
                url: '/update-cart/' + id,
                type: 'get',
                dataType: 'json',
                data: {
                    param: param,
                },
                success: function (data) {
                    let b = Number(price.replace(/[^0-9.-]+/g, ""));
                    let a = b * parseInt(qty);
                    total.text(addCommas(a));
                    $('#total').text(data.totalQty);
                    $('#totalPrice').text(addCommas(data.totalPrice));
                }
            });
        } else {
            $(this).val(1);
        }
    })

    //remove
    $('.product-delete').on('click', function (e) {
        e.preventDefault();
        let id = $(this).parents('tr').find('#product-id').attr('data-id')
        let tr = $(this).parents('tr');
        $.ajax({
            url: '/remove-cart/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                let total = data.total;
                let cart = $('#cart');
                cart.html('');
                cart.append(data.html);
                // if (total !== 0) {
                //     tr.remove();
                $('#total').text(data.total);
                //     $('#totalPrice').text(addCommas(data.totalPrice));
                // } else {
                //     $('#cart').html("Giỏ hàng rỗng.");
                // }
            }
        });
    });

    function addCommas(numberString) {
        numberString += '';
        var x = numberString.split('.'),
            x1 = x[0],
            x2 = x.length > 1 ? '.' + x[1] : '',
            rgxp = /(\d+)(\d{3})/;

        while (rgxp.test(x1)) {
            x1 = x1.replace(rgxp, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
});
