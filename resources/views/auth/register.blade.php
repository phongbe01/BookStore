<!doctype html>
<html lang="en">
<head>
    @include('layouts.main')
</head>
<body>
<div class="main login-background">

    <form action="" method="POST" class="form" id="form-1">
        <h3 class="heading-1">Đăng Ký</h3>
        <div class="spacer"></div>
        <div class="form-group-1">
            <label for="fullname" class="form-label">Tên đầy đủ</label>
            <input id="fullname" name="fullname" type="text" placeholder="Nhập họ tên" class="form-control-1">
            <span class="form-message"></span>
        </div>
        <div class="form-group-1">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="Nhập Email" class="form-control-1">
            <span class="form-message"></span>
        </div>
        <div class="form-group-1">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control-1">
            <span class="form-message"></span>
        </div>
        <div class="form-group-1">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu"
                   type="password" class="form-control-1">
            <span class="form-message"></span>
        </div>
        <button class="form-submit">Đăng ký</button>
        <div class="form-group-1">
            <a href="{{route('login')}}" class="form-submit">Đăng nhập</a>
        </div>
    </form>
</div>
<script src="{{asset("js/validator.js")}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            formGroupSelector: '.form-group-1',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', 6),
                Validator.isRequired('#password_confirmation'),
                Validator.isConfirmed('#password_confirmation', function () {
                    return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function (data) {
                // Call API
                console.log(data);
            }
        });
    });
</script>
</body>
</html>
