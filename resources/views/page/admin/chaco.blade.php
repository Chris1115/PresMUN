@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
@endsection

@section('content')
{{-- @dump($chacos) --}}
{{-- @dump($chaco_pers) --}}
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">PERSONEL LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chaco_persModal" id="addModalBtn2">
                    + ADD DATA
                </button>
                <table class="table table-hover table-dark">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">image</th>
                            <th scope="col">Chair/Council</th>
                            <th scope="col">Role</th>
                            <th scope="col">Institution</th>
                            <th scope="col">Achievements</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chaco_pers as $chaco_per)
                        <tr>
                            <th scope="row">{{ $chaco_per->id }}</th>
                            <td>{{ $chaco_per->cp_name }}</td>
                            <td>{{ $chaco_per->cp_image }}</td>
                            <td>{{ $chaco_per->c_name }}</td>
                            <td>{{ $chaco_per->cp_role }}</td>
                            <td>{{ $chaco_per->cp_institution }}</td>
                            <td>{{ $chaco_per->cp_achievements }}</td>
                            <td>{{ $chaco_per->cp_description }}</td>
                            <td>{{ $chaco_per->created_at }}</td>
                            <td>{{ $chaco_per->updated_at }}</td>
                            <td><a href="/admin/chaco_pers/edit/{{ $chaco_per->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn2" data-id="{{ $chaco_per->id }}" data-bs-toggle="modal" data-bs-target="#chaco_persModal">EDIT</a></td>
                            <td><a href="/admin/chaco_pers/delete/{{ $chaco_per->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12 text-white">
                <h1 class="display-1 text-center py-5">CHAIRS & COUNCIL LIST</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chacoModal" id="addModalBtn1">
                    + ADD DATA
                </button>
                <table class="table table-hover table-dark text-center">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($chacos as $chaco)
                    <tr>
                        <th scope="row">{{ $chaco->id }}</th>
                        <td>{{ $chaco->c_image }}</td>
                        <td>{{ $chaco->c_name }}</td>
                        <td>{{ $chaco->c_topic }}</td>
                        <td>{{ $chaco->c_description }}</td>
                        <td>{{ $chaco->created_at }}</td>
                        <td>{{ $chaco->updated_at }}</td>
                        <td><a href="/admin/chaco/edit/{{ $chaco->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn1" data-id="{{ $chaco->id }}" data-bs-toggle="modal" data-bs-target="#chacoModal">EDIT</a></td>
                        <td><a href="/admin/chaco/delete/{{ $chaco->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
            </div>
        </div>
    </div>

    <!-- CHAIRS & COUNCIL Modal -->
    <form action="/admin/chaco/insert" method="post" id="chacoForm" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="chacoModal" tabindex="-1">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="chacoModalLabel">CHAIRS & COUNCILS FORM</h5>
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
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="topic" class="form-label">Topic</label>
                <input type="text" class="form-control" id="topic" name="topic">
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

    <!-- PERSONEL Modal -->
    <form action="/admin/chaco_pers/insert" method="post" id="chacoPersForm" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="chaco_persModal" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="chaco_persModalLabel">PERSONEL FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                {{-- Form Content --}}
                <input type="hidden" id="pers_id" name="id">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="pers_name" name="name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <select class="form-select mb-3" name="chacos_id" id="chacos_id">
                    <option selected>Select chairs & councils</option>
                    @foreach ($chacos as $chaco)
                        <option value="{{ $chaco->id }}">{{ $chaco->c_name }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role">
                </div>
                <div class="mb-3">
                    <label for="institution" class="form-label">institution</label>
                    <input type="text" class="form-control" id="institution" name="institution">
                </div>
                <div class="mb-3">
                    <label for="achievements" class="form-label">Achievements</label>
                    <input type="text" class="form-control" id="achievements" name="achievements">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="pers_description" rows="3" name="description"></textarea>
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
<script src="{{ asset('js/admin-chaco.js') }}"></script>
@endsection