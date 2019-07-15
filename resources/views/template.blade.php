<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sembako V.1.0</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/sembako.css') }}" rel="stylesheet">
  
</head>
  @include('sweetalert::alert')
  @include('navbar')
  @yield('main')
  


</body>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
</html>