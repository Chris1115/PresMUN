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
        @if (Session::has('admin'))
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-white text-hover active" aria-current="page" href="/admin/dashboard">Dashboard</a>
            </li>
        </ul>
        @endif
        </div>
        @if (Session::has('admin'))
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-primary px-3 fs-5 text-hover">LOGOUT</a>
        </form>
        @endif
    </div>
</nav>