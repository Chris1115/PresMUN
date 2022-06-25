@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/chaco.css') }}" rel="stylesheet">
@endsection

<div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
    <h1 class="display-3 text-white m-auto text-hover mb-3">Chairs & Councils</h1>
</div>

@section('content')
    {{-- @dump($chaco) --}}
    {{-- @dump($pers) --}}
    <div class="container-fluid bg-dark p-5">
        <div class="container text-white">
            <div class="row text-center">
                <img src="{{ asset('storage/'. $chaco->c_image) }}" alt="" class="col-4 offset-4">
                <h1 class="display-1 pb-3">{{ $chaco->c_name }}</h1>
                <h1 class="fs-3 py-3">{{ $chaco->c_topic }}</h1>
                <h1 class="fs-3 py-3">{{ $chaco->c_description }}</h1>
            </div>
            @foreach ($pers as $item)
                <div class="row text-white my-5">
                    <img src="{{ asset('storage/'.$item->cp_image) }}" alt="" class="col-3 offset-1 profile-card">
                    <div class="col-8 d-flex flex-column justify-content-center">
                        <h1 class="fs-1 pb-3">{{ $item->cp_name }} - {{ $item->cp_role }}</h1>
                        <h1 class="fs-4 pb-3">{{ $item->cp_institution }}</h1>
                        <h1 class="fs-6 pb-3">{{ $item->cp_achievements }}</h1>
                        <h1 class="fs-6 text-justify">{{ $item->cp_description }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection