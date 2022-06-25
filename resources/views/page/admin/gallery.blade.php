@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
{{-- @dump($galleries) --}}
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">GALLERIES LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#galleryModal" id="addModalBtn">
                    + ADD DATA
                </button>
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <th scope="row">{{ $gallery->id }}</th>
                        <td>{{ $gallery->ga_title }}</td>
                        <td>{{ $gallery->ga_image }}</td>
                        <td>{{ $gallery->created_at }}</td>
                        <td>{{ $gallery->updated_at }}</td>
                        <td><a href="/admin/gallery/edit/{{ $gallery->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn" data-id="{{ $gallery->id }}" data-bs-toggle="modal" data-bs-target="#galleryModal">EDIT</a></td>
                        <td><a href="/admin/gallery/delete/{{ $gallery->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <form action="/admin/gallery/insert" method="post" id="galleryForm" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="galleryModalLabel">GALLERIES FORM</h5>
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
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
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
<script src="{{ asset('js/admin-gallery.js') }}"></script>
@endsection