@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-4 pb-5 my-5">
    
                <!-- Title -->
                <h1 class="display-1 d-flex justify-content-center py-5 text-white text-hover">LOGIN</h1>
                
                <!-- Login Form -->
                <form action="/login" method="post" class="d-flex flex-column justify-content-center">
                @csrf
                <div class="form-floating mb-5">
                    <input type="text" class="form-control" id="floatingInput" name="username">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" id="floatingPassword" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection