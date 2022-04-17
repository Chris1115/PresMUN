@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
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

    <h1>HELLO DARI ARTICLE PAGE</h1>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection