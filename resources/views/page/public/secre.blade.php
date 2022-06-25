@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/secre.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 text-white m-auto text-hover mb-3">SECRETARIATS</h1>
    </div>
@endsection

@section('content')
{{-- @dump($secres) --}}
{{-- @dump($divisions) --}}
<div class="container-fluid bg-dark text-white">
    <div class="container py-5">

        @foreach ($divisions as $division)
        <div class="row py-5 ">
            <h1 class="display-1 text-center">{{ $division->d_name }}</h1>
        </div>
        <div class="row profile-row">
            @foreach ($secres as $secre)
            @if ($secre->d_name == $division->d_name)
                @if ($secre->sd_name == 'Under Secretary General')
                <div class="col-3 offset-3 profile-card position-relative">
                    <img src="{{ asset("storage/".$secre->s_image) }}">
                    <div class="profile-desc position-absolute top-0 bottom-0">
                        <h1 class="fs-2 text-center blockquote">{{ $secre->s_name }}</h1>
                        <h1 class="fs-5 text-center blockqoute-footer">-{{ $secre->sd_name}}-</h1>
                    </div>
                </div>
                @elseif ($secre->sd_name == 'Assistance Under Secretary General')
                <div class="col-3 profile-card position-relative">
                    <img src="{{ asset("storage/".$secre->s_image) }}">
                    <div class="profile-desc position-absolute top-0 bottom-0">
                        <h1 class="fs-2 text-center blockquote">{{ $secre->s_name }}</h1>
                        <h1 class="fs-5 text-center blockqoute-footer">-{{ $secre->sd_name}}-</h1>
                    </div>
                </div>
                <div class="col-3"></div>
                @else
                <div class="col-3 profile-card position-relative">
                    <img src="{{ asset("storage/".$secre->s_image) }}">
                    <div class="profile-desc position-absolute top-0 bottom-0">
                        <h1 class="fs-2 text-center blockquote">{{ $secre->s_name }}</h1>
                        <h1 class="fs-5 text-center blockqoute-footer">-{{ $secre->sd_name}}-</h1>
                    </div>
                </div>
                @endif
            @endif
            @endforeach
        </div>
        @endforeach
        {{-- End Secre Page --}}

    </div>
</div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
<script src="{{ asset('js/secre.js') }}" lang='Javascript' type='text/javascript'></script>
@endsection