@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('public/css/gossip.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 text-white m-auto text-hover mb-3">GOSSIP BOX</h1>
    </div>
@endsection

@section('content')
{{-- @dump($gossips) --}}
<div class="container-fluid bg-dark">
    <div class="container d-flex flex-column align-items-center justify-content-center text-center">
        <div class="row mb-5">
            <div class="col-12 p-5">
                <h1 class="h1 text-white"> GOSSIP LIST</h1>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gossipModal">
                ADD GOSSIP
            </button>
        </div>
        <div class="row text-white">
            @foreach ($gossips as $gossip)
                <div class="gossip-card col-4 p-5 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="fs-6 mb-3">From : {{ $gossip->g_sender }}</h1>
                    <h1 class="fs-5">{{ $gossip->g_title }}</h1>
                    <h1 class="fs-3">{{ $gossip->g_message }}</h1>
                    <h1 class="fs-6 mt-3 mb-3">To : {{ $gossip->g_receiver }}</h1>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <form action="/gossip/insert" method="post">
        @csrf
        <div class="modal fade" id="gossipModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="gossipModalLabel">GOSSIP FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                {{-- Form Content --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="text" class="form-control" id="message" name="message">
                </div>
                <select class="form-select mb-3" aria-label="Default select example" name="division_id">
                    <option selected>To :</option>
                    @foreach ($chacos as $chaco)
                        <option value="{{ $chaco->id }}">{{ $chaco->c_name }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="sender" class="form-label">From :</label>
                    <input type="text" class="form-control" id="sender" name="sender">
                </div>
                {{-- End Form --}}
    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                <button type="button" class="btn btn-primary">SAVE CHANGES</button>
                </div>
            </div>
            </div>
        </div>
        </form>
</div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
@endsection