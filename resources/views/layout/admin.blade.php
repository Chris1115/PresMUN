<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/navAuth.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">

    @yield('style')

    <title>{{ $title }}</title>
  </head>
    @include('components/navAuth')

    @yield('content')

    @include('components/footer')
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/admin.js') }}"></script>
    @yield('script')

  </body>
</html>