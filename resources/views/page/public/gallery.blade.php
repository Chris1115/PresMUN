@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('public/css/gallery.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 text-white m-auto text-hover mb-3">GALLERY</h1>
    </div>
@endsection

@section('content')
{{-- @dump($galleries) --}}
<div class="container-fluid bg-dark py-5">
    <div class="container">
        <h1 class="display-1 text-white py-5">MORE ABOUT US</h1>
        <div class="row py-5">
            @foreach ($galleries as $gallery)
            <div class="col-4 photo-card position-relative py-3 text-white">
                <img src="{{ asset('presidentinternationalmun.org/public/storage/'. $gallery->ga_image) }}" alt="" class="photo-card col-4 my-3">
                <div class="photo-desc position-absolute bottom-0 left-50">
                    <h1 class="fs-2 text-center blockquote">{{ $gallery->ga_title }}</h1>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection