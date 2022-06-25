@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('header')
    <div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 text-white m-auto text-hover mb-3">ARTICLE PRESSCORPS</h1>
    </div>
@endsection

@section('content')
{{-- @dump($article) --}}
    <div class="container-fluid bg-dark p-5">
        <div class="container text-white">
            <h1 class="display-1 pt-3 pb-3">{{ $article->a_title }}</h1>
            <h1 class="fs-1">{{ $article->a_image }}</h1>
            <h1 class="fs-1 pt-3 pb-3">{{ $article->a_headline }}</h1>
            <h1 class="fs-3">{{ $article->a_description }}</h1>
            <h3 class="h5 pt-4">Last updated at : {{ $article->updated_at }}</h3>
            <a href="/article" class="btn btn-primary mt-5">Back to articles</a>
        </div>
    </div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection