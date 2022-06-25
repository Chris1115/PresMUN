<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">

    @yield('style')

    <title>{{ $title }}</title>
  </head>
    {{-- Parallax --}}
    <div class="parallax-header">

      {{-- Navbar --}}
        @include('components/nav')
      {{-- End Navbar --}}

      {{-- Header Content --}}
        @yield('header')
      {{-- End Header Content --}}

    </div>
    {{-- End Parallax --}}

    {{-- Main Content --}}
    @yield('content')
    {{-- End Main Content --}}

    @include('components/footer')

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    @yield('script')

  </body>
</html>