@extends('layout/public')

@section('style')
{{-- Hubungkan ke bila ada custom script css untuk page ini, sesuai dengan template berikut --}}
{{-- <link href="{{ asset('css/{nama_file}') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="container d-flex flex-column align-items-center position-absolute top-50 start-50 translate-middle">
        <h1 class="display-3 text-white m-auto text-hover mb-3">PRESIDENT MODEL UNITED NATIONS 2022</h1>
        <a href="#" class="btn btn-warning">REGISTER NOW</a>
    </div>
@endsection

@section('content')
<div class="container-fluid bg-dark text-white">
    <div class="container py-5">
        <div class="row p-5">
            <div class="col-5">
                <img src="{{ asset('image/gallery/PRESMUN 2012_210812_0.jpg') }}" alt="" class="photo-card" width="100%">
            </div>
            <div class="col-7">
                <h1 class="display-1">Since 2012</h1><br>
                <h1 class="fs-4 text-justify">President Model United Nations (PresMUN) 2022 is the tenth season of PresMUN in its Secretariat service. PresMUN itself is an annual MUN conference co-hosted by President University Model United Nations (PresUniv MUN). Its first installment was done in 2012 and ever since has received high enthusiasm and eager anticipation from local and international audiences.</h1>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-5">
                <h1 class="display-1">Encourage</h1><br>
                <h1 class="fs-4 text-justify">PresMUN has achieved a certain reputation at the national level and is often deemed one of the most prestigious MUN conferences in Indonesia despite its young age. This year, PresMUN 2o21 aims to be a vessel upon which a group of young thinkers could pour their ideas and learn how to shape this world into a better place.</h1>
            </div>
            <div class="col-7">
                <img src="{{ asset('image/gallery/PRESMUN 2012_210812_1.jpg') }}" alt="" class="photo-card" width="100%">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-pallete-3 py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h1 class="display-1 text-center">VISION</h1><br>
                <img src="{{ asset('icons/mortarboard.svg') }}" alt="" width="15%" class="mb-5">
                <h1 class="fs-4 text-center">To bring forward greater awareness of potential future leaders for crucial international issues and how such issues are handled.</h1>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-12">
                <h1 class="display-1 text-center">MISSION</h1><br>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-4 pb-5 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('icons/globe.svg') }}" alt="" width="50%" class="mb-5">
                <h1 class="fs-5 text-center">Creating an atmosphere that is substantially supportive of the learning process for all participating delegates.</h1>
            </div>
            <div class="col-4 pb-5 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('icons/hand-thumbs-up.svg') }}" alt="" width="50%" class="mb-5">
                <h1 class="fs-5 text-center">Providing the best service possible to the participating delegates through professional manner and amiable presence that President Model United Nations (PresMUN) has always been attributed to.</h1>
            </div>
            <div class="col-4 pb-5 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('icons/people.svg') }}" alt="" width="50%" class="mb-5">
                <h1 class="fs-5 text-center">Building strong partnerships with several external parties which shall unsure mutual benefit upon continuous, long-lasting fashion. </h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="display-1 text-center">WITH TOPICS</h1><br>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-3 topic-card position-relative">
                <img src="{{ asset("image/category/society.jpg") }}" width="100%" height="100%">
                <div class="topic-desc position-absolute top-0 bottom-0">
                    <h1 class="fs-2 text-center blockquote">SOCIETY</h1>
                </div>
            </div>
            <div class="col-3 topic-card position-relative">
                <img src="{{ asset("image/category/culture.jpg") }}" width="100%" height="100%">
                <div class="topic-desc position-absolute top-0 bottom-0">
                    <h1 class="fs-2 text-center blockquote">CULTURE</h1>
                </div>
            </div>
            <div class="col-3 topic-card position-relative">
                <img src="{{ asset("image/category/earth.jpg") }}" width="100%" height="100%">
                <div class="topic-desc position-absolute top-0 bottom-0">
                    <h1 class="fs-2 text-center blockquote">EARTH</h1>
                </div>
            </div>
            <div class="col-3 topic-card position-relative">
                <img src="{{ asset("image/category/food.jpg") }}" width="100%" height="100%">
                <div class="topic-desc position-absolute top-0 bottom-0">
                    <h1 class="fs-2 text-center blockquote">FOOD</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- Hubungkan ke bila ada custom script js untuk page ini, sesuai dengan template berikut --}}
{{-- <script src="{{ asset('js/{nama_file}') }}"></script> --}}
<script src="{{ asset('js/landing.js') }}"></script>
@endsection