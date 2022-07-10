<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset("image/logo.png") }}" alt="LOGO" width="120" height="120">
        </a>
        <a href="/" class="logo-text text-white text-decoration-none text-hover">
            PRESIDENT INTERNATIONAL MODEL UNITED NATIONS 2022
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-white text-hover active" aria-current="page" href="/article">ARTICLE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-white text-hover" href="/gall">GALLERY</a>
            </li>
            <li class="nav-item">
                <p class="nav-link px-3 fs-5 text-white text-hover" id="chacos-view">CHAIRS & COUNCIL</p>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-white text-hover" href="/secre">SECRETARIAT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-white text-hover" href="/gossip">GOSSIP BOX</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container fs-4 text-center" id="hover-menu">
    <div class="row p-5 d-flex">
        @foreach ($chacos as $chaco)
            <a href="/chaco/{{ $chaco->id }}" class="col-4 fw-bolder p-3 text-decoration-none text-white text-hover">{{ $chaco->c_name }}</a>
        @endforeach
    </div>
</div>