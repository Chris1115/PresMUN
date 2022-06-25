@extends('layout/admin')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/admin-article.css') }}" rel="stylesheet">
@endsection

@section('content')
{{-- @dump($articles) --}}
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-white">
                    <h1 class="display-1 text-center py-5">ARTICLE LIST</h1>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal" id="addModalBtn">
                        + ADD ARTICLE
                    </button>
                    <table class="table table-hover table-dark">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <td>{{ $article->a_image }}</td>
                            <td>{{ $article->a_title }}</td>
                            <td>{{ $article->a_headline }}</td>
                            <td>{{ $article->a_description }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>{{ $article->updated_at }}</td>
                            <td><a href="/admin/article/edit/{{ $article->id }}" class="button btn-warning text-decoration-none p-2 editModalBtn" data-id="{{ $article->id }}"  data-bs-toggle="modal" data-bs-target="#articleModal">EDIT</a></td>
                            <td><a href="/admin/article/delete/{{ $article->id }}" class="button btn-danger text-decoration-none p-2">DELETE</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="/admin/dashboard" class="button btn-primary text-decoration-none p-3 fs-4 rounded">Back To Dashboard</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <form action="/admin/article/insert" method="post" id="articleForm" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="articleModalLabel">ARTICLE FORM</h5>
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
                <div class="mb-3">
                    <label for="headline" class="form-label">Headline</label>
                    <input type="text" class="form-control" id="headline" name="headline">
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
<script src="{{ asset('js/admin-article.js') }}"></script>
@endsection