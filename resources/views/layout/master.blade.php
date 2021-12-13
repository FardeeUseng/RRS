<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('font/tahomo.ttf')}}">
   <link rel="stylesheet" href="{{asset('font/SukhumvitSet-Medium.ttf')}}">
   <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
</head>
<body>
   <header>@yield('header')</header>
   @yield('content')
   <footer>@yield('footer')</footer>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>