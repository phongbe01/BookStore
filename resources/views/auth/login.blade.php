<!doctype html>
<html lang="en">
<head>
    @include('layouts.main')
</head>
<body style="margin-bottom: 0 !important;">
<div class="app">
    <div class="">
        <div class="main login-background">
            <form action="{{route('login')}}" method="POST" class="form" id="login-form">
                @csrf
                <h3 class="heading-1">Đăng nhập</h3>
                <div class="spacer"></div>
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
                <button class="form-submit">Đăng nhập</button>
                <div class="form-group-1">
                    <a href="{{route('register')}}" class="form-submit">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset("js/validator.js")}}" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function (e) {
        e.preventDefault();
        Validator({
            form: '#login-form',
            formGroupSelector: '.form-group-1',
            errorSelector: '.form-message',
            rules: [
                Validator.isEmail('#email'),
                Validator.minLength('#password', 6),
            ],
        });
    });
</script>
</body>
</html>
