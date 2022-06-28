@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('public/css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid bg-pallete-3">
        <div class="container py-5" id="menu">
            <h1 class="display-1 text-center py-5">MENU</h1>
            <div class="row text-center pb-5">
                <div class="col-3 py-3">
                    <a href="/admin/secre" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/person.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/person-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">SECRETARIATS</h1>
                    </a>
                </div>
                <div class="col-3 py-3">
                    <a href="/admin/chaco" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/people.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/people-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">CHAIRS & COUNCILS</h1>
                    </a>
                </div>
                <div class="col-3 py-3">
                    <a href="/admin/article" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/file-text.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/file-text-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">ARTICLES</h1>
                    </a>
                </div>
                <div class="col-3 py-3">
                    <a href="/admin/gossip" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/chat-left-dots.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/chat-left-dots-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">GOSSIP</h1>
                    </a>
                </div>
            </div>
            <div class="row text-center pb-5">
                <div class="col-3 py-3 offset-1">
                    <a href="/admin/admin" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/person-badge.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/person-badge-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">Admin</h1>
                    </a>
                </div>
                <div class="col-3 py-3">
                    <a href="/admin/gallery" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/image.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/image-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">GALLERY</h1>
                    </a>
                </div>
                <div class="col-3 py-3">
                    <a href="/admin/division" class="text-decoration-none text-dark">
                        <div class="menu-card">
                            <img src="{{ asset('public/icons/diagram-2.svg') }}" width="180" height="200">
                            <img src="{{ asset('public/icons/diagram-2-fill.svg') }}" width="180" height="200" class="front-image">
                        </div>
                        <h1 class="display-6 fs-2">DIVISIONS</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
<script src="{{ asset('public/js/dashboard.js') }}"></script>
@endsection