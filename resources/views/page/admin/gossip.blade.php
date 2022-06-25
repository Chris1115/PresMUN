@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
{{-- @dump($gossips) --}}
{{-- @dump($chacos) --}}
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">GOSSIP LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gossipModal" id="addModalBtn">
                    + ADD GOSSIP
                </button>
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Message</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Receiver</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($gossips as $gossip)
                    <tr>
                        <th scope="row">{{ $gossip->id }}</th>
                        <td>{{ $gossip->g_title }}</td>
                        <td>{{ $gossip->g_message }}</td>
                        <td>{{ $gossip->g_sender }}</td>
                        <td>{{ $gossip->g_receiver }}</td>
                        <td>{{ $gossip->created_at }}</td>
                        <td>{{ $gossip->updated_at }}</td>
                        <td><a href="/admin/gossip/edit/{{ $gossip->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn"  data-id="{{ $gossip->id }}"  data-bs-toggle="modal" data-bs-target="#gossipModal">EDIT</a></td>
                        <td><a href="/admin/gossip/delete/{{ $gossip->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form action="/admin/gossip/insert" method="post" id="gossipForm">
    @csrf
    <div class="modal fade" id="gossipModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="gossipModalLabel">GOSSIP FORM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            {{-- Form Content --}}
            <input type="hidden" id="id" name="id">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <input type="text" class="form-control" id="message" name="message">
            </div>
            <select class="form-select mb-3" name="receiver" id="receiver">
                <option selected>To :</option>
                @foreach ($chacos as $chaco)
                    <option value="{{ $chaco->c_name }}">{{ $chaco->c_name }}</option>
                @endforeach
                    <option value="Committee">Committee</option>
            </select>
            <div class="mb-3">
                <label for="sender" class="form-label">From :</label>
                <input type="text" class="form-control" id="sender" name="sender">
            </div>
            {{-- End Form --}}

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
            <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
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
<script src="{{ asset('js/admin-gossip.js') }}"></script>
@endsection