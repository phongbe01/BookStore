<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'BookStore') }}</title>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<script src="https://kit.fontawesome.com/542d0c4866.js" crossorigin="anonymous"></script>

<!-- Styles -->
<link href="{{asset('admin/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('css/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('css/auth.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="{{asset('js/jquery-1.7.2.min.js')}}"></script>
<script></script>
<script type="text/javascript" src="{{asset('js/move-top.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/script.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/startstop-slider.js')}}" defer></script>
