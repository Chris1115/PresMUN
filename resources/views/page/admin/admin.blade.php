@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('public/css/admin-article.css') }}" rel="stylesheet">
@endsection

@section('content')
{{-- @dump($admin) --}}
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-white">
                    <h1 class="display-1 text-center py-5">ADMIN LIST</h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminModal" id="addModalBtn">
                        + ADD ADMIN
                    </button>
                    <table class="table table-hover table-dark">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($admin as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->u_username }}</td>
                            <td>{{ $item->u_password }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td><a href="/admin/item/edit/{{ $item->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn" data-id="{{ $item->id }}"  data-bs-toggle="modal" data-bs-target="#adminModal">EDIT</a></td>
                            <td><a href="/admin/admin/delete/{{ $item->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <form action="/admin/admin/insert" method="post" id="adminForm">
        @csrf
        <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">ADMIN FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                {{-- Form Content --}}
                <input type="hidden" id="id" name="id">
                <div class="form-floating mb-5">
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="password" class="form-control" id="password" name="password">
                    <label for="floatingPassword">Password</label>
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
<script src="{{ asset('public/js/admin-admin.js') }}"></script>
@endsection