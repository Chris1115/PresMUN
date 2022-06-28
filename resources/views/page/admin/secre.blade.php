@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
{{-- @dump($secres) --}}
{{-- @dump($divisions) --}}
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">SECRETARIAT LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#secreModal" id="addModalBtn">
                    + ADD DATA
                </button>
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">image</th>
                        <th scope="col">Division</th>
                        <th scope="col">Sub-division</th>
                        <th scope="col">Achievements</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($secres as $secre)
                    <tr>
                        <th scope="row">{{ $secre->id }}</th>
                        <td>{{ $secre->s_name }}</td>
                        <td>{{ $secre->s_image }}</td>
                        <td>{{ $secre->d_name }}</td>
                        <td>{{ $secre->sd_name }}</td>
                        <td>{{ $secre->s_achievements }}</td>
                        <td>{{ $secre->s_description }}</td>
                        <td>{{ $secre->created_at }}</td>
                        <td>{{ $secre->updated_at }}</td>
                        <td><a href="/admin/secre/edit/{{ $secre->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn" data-id="{{ $secre->id }}" data-bs-toggle="modal" data-bs-target="#secreModal">EDIT</a></td>
                        <td><a href="/admin/secre/delete/{{ $secre->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form action="/admin/secre/insert" method="post" id="secreForm" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="secreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="secreModalLabel">SECRETARIAT FORM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            {{-- Form Content --}}
            <input type="hidden" id="id" name="id">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <img src="" alt="" class="img-fluid" id="secrePreview" width="200px">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <select class="form-select mb-3" name="division_id" id="division_id">
                <option selected>Select divisions</option>
                @foreach ($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->d_name }}</option>
                @endforeach
            </select>
            <select class="form-select mb-3" name="subdivision_id" id="subdivision_id">
                <option selected>Select subdivisions</option>
            </select>
            <div class="mb-3">
                <label for="achievements" class="form-label">Achievements</label>
                <input type="text" class="form-control" id="achievements" name="achievements">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
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
<script src="{{ asset('public/js/admin-secre.js') }}"></script>
@endsection