
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
                    <a class="nav-link {{ Request::is('faq')  ? 'active' : '' }}" href="/faq">FAQ</a>
                    <a class="nav-link" href="#">Bantuan</a>
                    {{-- <a class="nav-link" href="#"><div class="d-block d-lg-none">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.26471 2.85306C1.34594 2.44689 1.74106 2.18348 2.14723 2.26471L3.19659 2.47458C4.38184 2.71163 5.27335 3.69482 5.39362 4.89754L5.47889 5.75014H19.0544C21.0386 5.75014 22.4945 7.61488 22.0133 9.53988L20.8905 14.0309C20.4175 15.9229 18.7176 17.2501 16.7674 17.2501H7.77449C6.38244 17.2501 5.20994 16.2099 5.04408 14.8278L4.0546 6.58215L3.90107 5.0468C3.8464 4.50011 3.44117 4.0532 2.90242 3.94545L1.85306 3.73558C1.44689 3.65435 1.18348 3.25923 1.26471 2.85306ZM9 12.75C8.58579 12.75 8.25 13.0858 8.25 13.5C8.25 13.9142 8.58579 14.25 9 14.25H13C13.4142 14.25 13.75 13.9142 13.75 13.5C13.75 13.0858 13.4142 12.75 13 12.75H9Z" fill="white"/>
                            <circle cx="8.5" cy="20" r="1.5" fill="white"/>
                            <circle cx="17.5" cy="20" r="1.5" fill="white"/>
                        </svg>
                    </div></a> --}}
                </div>
        </div>
        {{-- <div class="navbar-cart d-none d-lg-block">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.26471 2.85306C1.34594 2.44689 1.74106 2.18348 2.14723 2.26471L3.19659 2.47458C4.38184 2.71163 5.27335 3.69482 5.39362 4.89754L5.47889 5.75014H19.0544C21.0386 5.75014 22.4945 7.61488 22.0133 9.53988L20.8905 14.0309C20.4175 15.9229 18.7176 17.2501 16.7674 17.2501H7.77449C6.38244 17.2501 5.20994 16.2099 5.04408 14.8278L4.0546 6.58215L3.90107 5.0468C3.8464 4.50011 3.44117 4.0532 2.90242 3.94545L1.85306 3.73558C1.44689 3.65435 1.18348 3.25923 1.26471 2.85306ZM9 12.75C8.58579 12.75 8.25 13.0858 8.25 13.5C8.25 13.9142 8.58579 14.25 9 14.25H13C13.4142 14.25 13.75 13.9142 13.75 13.5C13.75 13.0858 13.4142 12.75 13 12.75H9Z" fill="white"/>
                <circle cx="8.5" cy="20" r="1.5" fill="white"/>
                <circle cx="17.5" cy="20" r="1.5" fill="white"/>
            </svg>
        </div> --}}
    </div>
</nav>
<!-- End of Navbar -->
