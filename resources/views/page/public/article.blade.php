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

{{-- Halaman ini untuk list article, data disimpan dalam variable $articles dengan isi sebagai berikut : --}}
{{-- 1. $articles->id : nilai id --}}
{{-- 2. $articles->image : path gambar --}}
{{-- 3. $articles->title : judul --}}
{{-- 4. $articles->headline : paragraf pembuka --}}
{{-- 5. $articles->description : paragraf --}}
{{-- 6. $articles->created_at : tanggal dibuat --}}
{{-- 7. $articles->updated_at : tanggal terakhir update --}}
{{-- Silahkan lakukan foreach terhadap articles untuk bisa mengakses nilai dari masing2 artikel --}}
{{-- NOTE : Sisipkan path ini 'article/id_artikel' dalam href di setiap list view untuk user dapat mengakses detail dari artikel--}}

<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 p-5">
                <h1 class="display-1 text-white">ARTICLES</h1>
            </div>
            @foreach ($articles as $article)
                <div class="col-12 m-4">
                    <div class="card bg-dark text-white border border-white border-3 p-4">
                        <h3 class="h2 fw-bold">{{ $article->a_title }}</h3>
                        <h3 class="h5">{{ $article->a_headline }}</h3>
                        <h3 class="h5">Last updated at : {{ $article->updated_at }}</h3>
                        <a href="/article/{{ $article->id }}" class="text-decoration-none text-white">See Details</a>
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