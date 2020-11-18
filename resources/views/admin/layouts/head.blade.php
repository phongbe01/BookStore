<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Book Store</title>
    <!-- Google Font: Source Sans Pro -->
    @include('admin.layouts.style')
    @include('admin.layouts.js')

</head>
<body class="hold-transition sidebar-mini">
    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- end Navbar -->
    <!-- SideBar -->
    @include('admin.layouts.sidebar')
    <!-- SideBar -->
    <div class="content-wrapper">
        <!-- Main content -->
    @yield('content')
    <!-- /.content -->
    </div>
</body>
</html>
