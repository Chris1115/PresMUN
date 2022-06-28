@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
{{-- @dump($divisions) --}}
{{-- @dump($subdivisions) --}}
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">DIVISIONS LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#divisionModal" id="addModalBtn1">
                    + ADD DIVISION
                </button>
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($divisions as $division)
                    <tr>
                        <th scope="row">{{ $division->id }}</th>
                        <td>{{ $division->d_name }}</td>
                        <td>{{ $division->d_description }}</td>
                        <td>{{ $division->created_at }}</td>
                        <td>{{ $division->updated_at }}</td>
                        <td><a href="/admin/division/edit/{{ $division->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn1" data-id="{{ $division->id }}" data-bs-toggle="modal" data-bs-target="#divisionModal">EDIT</a></td>
                        <td><a href="/admin/division/delete/{{ $division->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row py-5">
                <div class="col-12 text-white">
                    <h1 class="display-1 text-center py-5">SUBDIVISIONS LIST</h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subdivisionModal" id="addModalBtn2">
                        + ADD SUBDIVISION
                    </button>
                    <table class="table table-hover table-dark">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Division</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($subdivisions as $subdivision)
                        <tr>
                            <th scope="row">{{ $subdivision->id }}</th>
                            <td>{{ $subdivision->d_name }}</td>
                            <td>{{ $subdivision->sd_name }}</td>
                            <td>{{ $subdivision->sd_description }}</td>
                            <td>{{ $subdivision->created_at }}</td>
                            <td>{{ $subdivision->updated_at }}</td>
                            <td><a class="button btn-warning text-decoration-none p-2 editModalBtn2" data-id="{{ $subdivision->id }}" data-bs-toggle="modal" data-bs-target="#subdivisionModal">EDIT</a></td>
                            <td><a href="/admin/subdivision/delete/{{ $subdivision->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
                </div>
        </div>
    </div>


    <!-- Division Modal -->
    <form action="/admin/division/insert" method="post" id="divisionForm">
    @csrf
    <div class="modal fade" id="divisionModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="divisionModalLabel">DIVISION FORM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            {{-- Form Content --}}
            <input type="hidden" id="d_id" name="id">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="d_name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="d_description" rows="3" name="description"></textarea>
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

    <!-- Subdivision Modal -->
    <form action="/admin/subdivision/insert" method="post" id="subdivisionForm">
        @csrf
        <div class="modal fade" id="subdivisionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="subdivisionModalLabel">SUBDIVISION FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                {{-- Form Content --}}
                <input type="hidden" id="sd_id" name="id">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="sd_name" name="name">
                </div>
                <select class="form-select mb-3" name="division_id" id="divisions_id">
                    <option selected>Select division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->d_name }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="sd_description" rows="3" name="description"></textarea>
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
<script src="{{ asset('public/js/admin-division.js') }}"></script>
@endsection