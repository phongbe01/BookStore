$(document).ready(function () {
    //show sidebar
    showSidebar();

    function showSidebar() {
        $('.toggle').on('click', function () {
            $('.navigation').toggleClass('active');
            $('.content-wrapper').toggleClass('active');
        })
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

})
