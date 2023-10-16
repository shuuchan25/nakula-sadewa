
<!-- Navbar -->

<nav class="navbar navbar-expand-lg" style="position: fixed; top: 0;left: 0; ">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('/assets/icons/logo-ns.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top me-2">
            Nakula Sadewa
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menus" aria-controls="navbar-menus" aria-expanded="false" aria-label="Toggle navigation" style="border: none">
            <span class="burger-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 60 60" fill="none">
                    <path d="M50 17.5H10" stroke="white" stroke-width="3.75" stroke-linecap="round"/>
                    <path d="M50 30H10" stroke="white" stroke-width="3.75" stroke-linecap="round"/>
                    <path d="M50 42.5H10" stroke="white" stroke-width="3.75" stroke-linecap="round"/>
                </svg>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbar-menus" style="justify-content: end">
            <div class="navbar-nav">
                <a class="nav-link {{ Request::is('/')  ? 'active' : '' }}" href="/">Beranda</a>    {{-- {{ Request::is('welcome')  ? 'active-nav' : '' }} --}}
                <a class="nav-link {{ Request::is('about')  ? 'active' : '' }}" href="/about">Tentang</a>
                <a class="nav-link {{ Request::is('attractions*') || Request::is('hotels*') || Request::is('shops*') || Request::is('culinaries*') ? 'active' : '' }}" href="../#katalog">Eksplorasi</a>
                <a class="nav-link" href="/faq">Pertanyaan</a>
                <a class="nav-link" href="#">Bantuan</a>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
