@extends('partials.master')
@section('content')


    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')

        {{-- Swiper --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

        <!-- Slick JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
            integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
            integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous"
            referrerpolicy="no-referrer" />

        <div class="bd-content homepage">
            {{-- HERO SECTION --}}
            <section class="hero-wrapper position-relative">
                <div id="slider-autoplay" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="z-index: 99">
                        @for ($i = 0; $i < count($galleries); $i++)
                            <button type="button" data-bs-target="#carouselIndicator"
                                data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"
                                aria-current="{{ $i === 0 ? 'true' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
                        @endfor
                        {{-- <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                    </div>
                    <div class="carousel-inner hero">
                        @if ($galleries->count() > 0)
                            @foreach ($galleries as $key => $gallery)
                                <div class="carousel-item {{ $key === 0 ? 'active' : 'hero' }}">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="d-block w-100"
                                        alt="hero-{{ $key + 1 }}">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/pict/hero-homepage.png') }}" class="d-block w-100"
                                    alt="hero-1">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="carousel-caption">
                    <div class="my-auto align-items-center justify-content-center">
                        @php
                            $words = explode(' ', $webprofile->slogan);
                        @endphp

                        @if (count($words) > 0)
                            <h5>{{ $words[0] }}</h5> <!-- Display the first word -->
                        @endif

                        @if (count($words) > 1)
                            @php
                                $remainingWords = array_slice($words, 1);
                                $remainingSlogan = implode(' ', $remainingWords);
                            @endphp
                            <h5>{{ $remainingSlogan }}</h5> <!-- Display the remaining words -->
                        @endif
                        <br>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            </section>
            {{-- END HERO SECTION --}}


            {{-- KATALOG MENU --}}
            <section  class="katalog" id="katalog">
                <div class="container">
                    <div class="row menu w-100 mx-auto">
                        <div data-aos="fade-up"  data-aos-duration="1000"   class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/attractions'">
                                    <a href="/attractions">
                                        <svg width="80px" height="70px" viewBox="0 0 24 24" id="Line_Color" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" fill="#fcb600"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                                                <path id="primary" d="M15.24,6.63a1.09,1.09,0,0,0-2,0l-2.8,5.53v0L9,8.9a1,1,0,0,0-1.8,0L3,18H21Z" style="fill:none;stroke:#fcb600;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Atraksi</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="100" data-aos-offset="100" class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/hotels'">
                                    <a href="hotels">
                                        <svg width="64px" height="64px" viewBox="0 0 24 24" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#8f010a">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{opacity:0.2;fill:none;stroke:#8f010a;stroke-width:5.000000e-02;stroke-miterlimit:10;} </style> <g id="Layer_Grid"></g>
                                            <g id="Layer_2"> <path d="M21,8c0-2.2-1.8-4-4-4H7C4.8,4,3,5.8,3,8v3.8c-0.6,0.5-1,1.3-1,2.2v2.7V17v2c0,0.6,0.4,1,1,1s1-0.4,1-1v-1h16v1 c0,0.6,0.4,1,1,1s1-0.4,1-1v-2v-0.3V14c0-0.9-0.4-1.7-1-2.2V8z M5,8c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v3h-1v-1c0-1.7-1.3-3-3-3 h-1c-0.8,0-1.5,0.3-2,0.8C11.5,7.3,10.8,7,10,7H9c-1.7,0-3,1.3-3,3v1H5V8z M16,10v1h-3v-1c0-0.6,0.4-1,1-1h1C15.6,9,16,9.4,16,10z M11,10v1H8v-1c0-0.6,0.4-1,1-1h1C10.6,9,11,9.4,11,10z M20,16H4v-2c0-0.6,0.4-1,1-1h3h3h2h3h3c0.6,0,1,0.4,1,1V16z"></path>
                                            </g> </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Akomodasi</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="200" data-aos-offset="100" class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/culinaries'">
                                    <a href="/culinaries">
                                        <svg width="64px" height="64px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fcb600">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"><path fill="#fcb600" d="M128 352.576V352a288 288 0 0 1 491.072-204.224 192 192 0 0 1 274.24 204.48 64 64 0 0 1 57.216 74.24C921.6 600.512 850.048 710.656 736 756.992V800a96 96 0 0 1-96 96H384a96 96 0 0 1-96-96v-43.008c-114.048-46.336-185.6-156.48-214.528-330.496A64 64 0 0 1 128 352.64zm64-.576h64a160 160 0 0 1 320 0h64a224 224 0 0 0-448 0zm128 0h192a96 96 0 0 0-192 0zm439.424 0h68.544A128.256 128.256 0 0 0 704 192c-15.36 0-29.952 2.688-43.52 7.616 11.328 18.176 20.672 37.76 27.84 58.304A64.128 64.128 0 0 1 759.424 352zM672 768H352v32a32 32 0 0 0 32 32h256a32 32 0 0 0 32-32v-32zm-342.528-64h365.056c101.504-32.64 165.76-124.928 192.896-288H136.576c27.136 163.072 91.392 255.36 192.896 288z"></path></g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Kuliner</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-offset="100" class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/travels'">
                                    <a href="/travels">
                                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"> <path d="M3 8L5.72187 10.2682C5.90158 10.418 6.12811 10.5 6.36205 10.5H17.6379C17.8719 10.5 18.0984 10.418 18.2781 10.2682L21 8M6.5 14H6.51M17.5 14H17.51M8.16065 4.5H15.8394C16.5571 4.5 17.2198 4.88457 17.5758 5.50772L20.473 10.5777C20.8183 11.1821 21 11.8661 21 12.5623V18.5C21 19.0523 20.5523 19.5 20 19.5H19C18.4477 19.5 18 19.0523 18 18.5V17.5H6V18.5C6 19.0523 5.55228 19.5 5 19.5H4C3.44772 19.5 3 19.0523 3 18.5V12.5623C3 11.8661 3.18166 11.1821 3.52703 10.5777L6.42416 5.50772C6.78024 4.88457 7.44293 4.5 8.16065 4.5ZM7 14C7 14.2761 6.77614 14.5 6.5 14.5C6.22386 14.5 6 14.2761 6 14C6 13.7239 6.22386 13.5 6.5 13.5C6.77614 13.5 7 13.7239 7 14ZM18 14C18 14.2761 17.7761 14.5 17.5 14.5C17.2239 14.5 17 14.2761 17 14C17 13.7239 17.2239 13.5 17.5 13.5C17.7761 13.5 18 13.7239 18 14Z" stroke="#8f010a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Paket Wisata</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="400" data-aos-offset="100" class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/shops'">
                                    <a href="/shops">
                                        <svg width="55px" height="55px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#fcb600"
                                            stroke-width="0.00024000000000000003">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5285 6C16.5098 5.9193 16.4904 5.83842 16.4701 5.75746C16.2061 4.70138 15.7904 3.55383 15.1125 2.65C14.4135 1.71802 13.3929 1 12 1C10.6071 1 9.58648 1.71802 8.88749 2.65C8.20962 3.55383 7.79387 4.70138 7.52985 5.75747C7.50961 5.83842 7.49016 5.9193 7.47145 6H5.8711C4.29171 6 2.98281 7.22455 2.87775 8.80044L2.14441 19.8004C2.02898 21.532 3.40238 23 5.13777 23H18.8622C20.5976 23 21.971 21.532 21.8556 19.8004L21.1222 8.80044C21.0172 7.22455 19.7083 6 18.1289 6H16.5285ZM8 11C8.57298 11 8.99806 10.5684 9.00001 9.99817C9.00016 9.97438 9.00044 9.9506 9.00084 9.92682C9.00172 9.87413 9.00351 9.79455 9.00718 9.69194C9.01451 9.48652 9.0293 9.18999 9.05905 8.83304C9.08015 8.57976 9.10858 8.29862 9.14674 8H14.8533C14.8914 8.29862 14.9198 8.57976 14.941 8.83305C14.9707 9.18999 14.9855 9.48652 14.9928 9.69194C14.9965 9.79455 14.9983 9.87413 14.9992 9.92682C14.9996 9.95134 14.9999 9.97587 15 10.0004C15 10.0004 15 11 16 11C17 11 17 9.99866 17 9.99866C16.9999 9.9636 16.9995 9.92854 16.9989 9.89349C16.9978 9.829 16.9957 9.7367 16.9915 9.62056C16.9833 9.38848 16.9668 9.06001 16.934 8.66695C16.917 8.46202 16.8953 8.23812 16.8679 8H18.1289C18.6554 8 19.0917 8.40818 19.1267 8.93348L19.86 19.9335C19.8985 20.5107 19.4407 21 18.8622 21H5.13777C4.55931 21 4.10151 20.5107 4.13998 19.9335L4.87332 8.93348C4.90834 8.40818 5.34464 8 5.8711 8H7.13208C7.10465 8.23812 7.08303 8.46202 7.06595 8.66696C7.0332 9.06001 7.01674 9.38848 7.00845 9.62056C7.0043 9.7367 7.00219 9.829 7.00112 9.89349C7.00054 9.92785 7.00011 9.96221 7 9.99658C6.99924 10.5672 7.42833 11 8 11ZM9.53352 6H14.4665C14.2353 5.15322 13.921 4.39466 13.5125 3.85C13.0865 3.28198 12.6071 3 12 3C11.3929 3 10.9135 3.28198 10.4875 3.85C10.079 4.39466 9.76472 5.15322 9.53352 6Z"
                                                    fill="#fcb600"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Oleh-oleh</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000"  data-aos-delay="500" data-aos-offset="100" class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/maps'">
                                    <a href="/maps">
                                        <svg width="61" height="61" viewBox="0 0 61 61" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_238_3279)">
                                                <path
                                                    d="M13.2774 19.5912C6.3696 19.5912 0.708008 25.2354 0.708008 32.1246C0.708008 34.7941 1.56033 37.2751 3.00341 39.3143L11.7439 54.4238C12.9679 56.0231 13.7819 55.7197 14.8 54.34L24.4401 37.934C24.6347 37.5809 24.7873 37.2062 24.9208 36.8232C25.5325 35.3322 25.847 33.7362 25.8467 32.1246C25.8467 25.2354 20.1869 19.5912 13.2774 19.5912ZM13.2774 25.4641C16.9979 25.4641 19.9571 28.4155 19.9571 32.1252C19.9571 35.835 16.9979 38.7852 13.2774 38.7852C9.55742 38.7852 6.59764 35.8344 6.59764 32.1252C6.59764 28.4155 9.55742 25.4641 13.2774 25.4641Z"
                                                    fill="#8F010A" />
                                                <path
                                                    d="M53.2298 0.437927C49.2004 0.437927 45.8977 3.7305 45.8977 7.74969C45.8977 9.3065 46.3945 10.7538 47.2366 11.9431L52.3356 20.7572C53.0497 21.6897 53.5243 21.5125 54.1181 20.7081L59.7413 11.1374C59.8551 10.9321 59.9442 10.7137 60.0215 10.4898C60.3784 9.62038 60.562 8.68956 60.5619 7.74969C60.5619 3.7299 57.2604 0.437927 53.2298 0.437927ZM53.2298 3.86397C55.4001 3.86397 57.1263 5.58537 57.1263 7.74969C57.1263 9.91342 55.4001 11.6342 53.2298 11.6342C51.0601 11.6342 49.3333 9.91342 49.3333 7.74969C49.3333 5.58537 51.0601 3.86397 53.2298 3.86397Z"
                                                    fill="#8F010A" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M53.5047 22.8305C52.1598 22.8604 50.8112 22.9173 49.4603 23.0173L49.6686 26.3284C50.9663 26.2344 52.2661 26.1739 53.5669 26.147L53.5047 22.8305ZM46.3372 23.3213C44.2602 23.5793 42.1653 23.9468 40.0944 24.5375L40.8743 27.7463C42.7561 27.21 44.7061 26.8635 46.6867 26.6175L46.3372 23.3213ZM36.9933 25.6484C36.3728 25.9223 35.7721 26.2389 35.1953 26.5959L35.1929 26.5989L35.1893 26.6001C34.3664 27.1184 33.4991 27.7762 32.791 28.7321C32.278 29.4246 31.8585 30.3003 31.7603 31.3358L34.8099 31.6739C34.8326 31.4309 34.9571 31.1101 35.181 30.8084H35.1822V30.8073C35.5431 30.3188 36.0842 29.8753 36.7276 29.4695L36.73 29.4683C37.1886 29.1853 37.6662 28.9341 38.1593 28.7165L36.9933 25.6484ZM35.4234 33.1511L33.4464 35.686C33.9151 36.1145 34.4065 36.4437 34.8811 36.719L34.8871 36.722L34.8931 36.7256C36.4684 37.6216 38.0929 38.1274 39.5988 38.6074L40.4643 35.4244C38.9589 34.9444 37.5398 34.4811 36.3236 33.7904C35.9752 33.5881 35.67 33.3768 35.4234 33.1511ZM43.4049 36.3198L42.5598 39.5082L42.9596 39.6327L43.4504 39.7895C45.0748 40.3181 46.631 40.8825 48.022 41.6636L49.4334 38.7188C47.7515 37.7737 46.0056 37.156 44.3231 36.6089L44.3183 36.6077L43.8143 36.4467L43.4049 36.3198ZM52.3034 40.9286L50.1349 43.2748C50.6472 43.8297 51.0309 44.4971 51.2177 45.1866L51.2188 45.1902L51.22 45.1956C51.4427 46.0006 51.4433 46.9475 51.2691 47.904L54.2762 48.5456C54.5216 47.1953 54.5611 45.7127 54.1577 44.2493C53.8063 42.9552 53.136 41.8312 52.3034 40.9286ZM50.2193 49.9031C49.8879 50.2531 49.5217 50.5683 49.1263 50.844H49.1252C48.0478 51.6017 46.798 52.1727 45.4705 52.6635L46.4605 55.8023C47.9125 55.2654 49.4035 54.607 50.7969 53.6266L50.8005 53.6236L50.8023 53.6224C51.3745 53.2217 51.9038 52.763 52.3818 52.2535L50.2193 49.9031ZM42.6537 53.5476C40.7306 54.0647 38.765 54.4586 36.7755 54.7925L37.2447 58.072C39.2923 57.7278 41.3483 57.3166 43.3917 56.7671L42.6537 53.5476ZM33.7822 55.245C31.7795 55.5186 29.766 55.7418 27.7465 55.9322L28.0111 59.2373C30.0617 59.0446 32.1158 58.8177 34.167 58.537L33.7822 55.245ZM24.7113 56.1925C22.6876 56.3529 20.6592 56.4834 18.6289 56.5936L18.7822 59.9071C20.8322 59.7963 22.884 59.6641 24.9352 59.5013L24.7113 56.1925ZM15.5782 56.7432C14.3613 56.8001 13.1415 56.8467 11.9187 56.8898L12.0193 60.2063C13.2497 60.164 14.4799 60.115 15.7099 60.0591L15.5782 56.7432Z"
                                                    fill="#8F010A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_238_3279">
                                                    <rect width="59.854" height="59.854" fill="white"
                                                        transform="translate(0.708008 0.437927)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Peta Digital</p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END KATALOG MENU --}}

            {{-- KALKULATOR --}}
            <section data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" class="kalkulator-home">
                <div class="container">
                    <div class="detail">
                        <div class="banner col-md-12">
                            <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata" />
                            <div class="content">
                                <div class="my-auto teks-kalkulator d-flex justify-content-center">
                                    <h1 class="heading">NAKULA SADEWA</h1>
                                </div>
                                <div class="overlay">
                                    <button class="button-kalkulator-home"
                                        onclick="location.href='/kalkulator'">KALKULATOR WISATA</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END KALKULATOR --}}

            {{-- ABOUT --}}
            @php
                use Illuminate\Support\Str;
            @endphp
            <section class="about  mt-5 mb-5 pb-5" id="about">
                <div class="container">
                    <div class="col-12">
                        <div class="content-about">
                            <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-4 about-img my-auto">
                                @if ($webprofile->image)
                                    <img src="{{ asset('storage/' . $webprofile->image) }}" alt="logo bem"
                                        class="img-fluid my-auto mx-auto">
                                @else
                                    <img src="../assets/pict/hero-homepage.png" alt="logo bem"
                                        class="img-fluid my-auto mx-auto">
                                @endif
                            </div>
                            <div data-aos="fade-left" data-aos-duration="1000" class="body-teks mx-3 px-2">
                                <div class="about-teks px-3 pt-2" style="text-align: justify">
                                    <h3>Tentang</h3>
                                    {!! \Illuminate\Support\Str::words($webprofile->shortdesc, 100) !!}
                                </div>
                                <div class="lihat-semua w-100" style="position: relative; bottom: 0; margin: 15px 0; text-align: right">
                                    <a href="/about">Lihat Semua <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT --}}

            {{-- VIDEO PROFILE --}}
            <section class="video-wrapper mt-5 mb-5 pt-5 pb-5">
                <div class="container video-profile">
                    <div class="row mb-3 mt-2 video-title">
                        <h3>Video Profile</h3>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" class="video col-lg ratio ratio-16x9">
                        <iframe src="{{ $webprofile->video }}" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            {{-- END VIDEO PROFILE --}}

            {{-- KALENDER EVENT --}}
            <section class="kalendar mb-5">
                <div class="container kalendar">
                    <div class="kalender-title d-flex" style="justify-content: space-between">
                        <h3 style="margin-bottom: 0; padding-top: 3px">Kalender Event</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/events'"><a
                                href="/events">Lihat Semua</a></button>
                    </div>
                    @if ($events->count() > 0)
                        <div class="container swiper pt-5">
                            <div  data-aos="fade-right" data-aos-duration="1000" class="slide-container-kalender">
                                <div  class="card-wrapper swiper-wrapper">
                                    @foreach ($events as $event)
                                        <div class="card swiper-slide my-2">
                                            <div class="image-box">
                                                <img src="{{ asset('storage/' . $event->image) }}">
                                            </div>
                                            <div class="card-kalender">
                                                <div class="card-kalender-title">
                                                    <h5>{{ $event->title }}</h5>
                                                </div>
                                                <div class="card-kalender-content">
                                                    <div class="lokasi-event" style="margin: 0 0 8px -2px">
                                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.4167C3.25 5.62281 7.17493 1.75 12 1.75C16.8251 1.75 20.75 5.62281 20.75 10.4167C20.75 13.3982 19.0113 16.3409 17.1686 18.4829C16.236 19.5669 15.2463 20.482 14.3733 21.1328C13.9374 21.4577 13.5186 21.7258 13.1405 21.9162C12.786 22.0947 12.3812 22.25 12 22.25C11.6188 22.25 11.214 22.0947 10.8595 21.9162C10.4814 21.7258 10.0626 21.4577 9.62674 21.1328C8.75371 20.482 7.76395 19.5669 6.83144 18.4829C4.98872 16.3409 3.25 13.3982 3.25 10.4167ZM12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13Z" fill="#32393a"/>
                                                        </svg>
                                                        <p class="lokasi" style="font-size: 16px; margin-bottom: 0; padding-top: 2px">{{ $event->place }}</p>
                                                    </div>
                                                    <p class="date"
                                                        style="font-size: 12px; margin-bottom: 5px">
                                                        {{ $event->date }}</p>
                                                </div>
                                            </div>
                                            <div class="card-button-kalender w-100 d-flex justify-content-center">
                                                <button type="detail" class="detail-button"
                                                    onclick="location.href='/events/{{ $event->slug }}'"><a
                                                        href="/events/{{ $event->slug }}">Lihat Detail</a></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div>
                        </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5">Belum ada event.</p>
                    @endif
                </div>
            </section>
            {{-- END KALENDER EVENT --}}

            {{-- BERITA TERKINI --}}
            <section class="berita mb-5 pt-5 pb-3">
                <div class="container berita">
                    <div class="berita-title d-flex" style="justify-content: space-between">
                        <h3 style="margin-bottom: 0; padding-top: 3px">Berita Terkini</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/articles'"><a
                                href="/articles">Lihat Semua</a></button>
                    </div>
                    @if ($articles->count() > 0)
                        <div class="container swiper mb-5 pt-3">
                            <div data-aos="fade-right" data-aos-duration="1000" class="slide-container-berita">
                                <div class="berita-wrapper swiper-wrapper m-2" style="margin-right: 0">
                                    @foreach ($articles as $article)
                                        <div class="card swiper-slide berita-card"
                                            onclick="location.href='/articles/{{ $article->slug }}'"
                                            style="margin-left: -4px">
                                            <div class="card text-bg-dark">
                                                <img src="{{ asset('storage/' . $article->image) }}"
                                                    class="card-img w-100">
                                                <div class="card-img-overlay berita-content">
                                                    <a href="/articles/{{ $article->slug }}">
                                                        <h5 class="card-title" style="margin-top: 130px">
                                                            {{ $article->title }}</h5>
                                                    </a>
                                                    <p class="card-text" style="color: white">
                                                        <small style="font-size: 12px">{{ $article->published_at }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5 text-white">Belum ada berita ataupun
                            artikel.</p>
                    @endif
                </div>
            </section>
            {{-- END BERITA TERKINI --}}

            {{-- KATA MEREKA --}}
            <section class="kata mt-5 mb-5 pt-3 pb-3">
                <div class="container kata">
                    <div class="row kata-title">
                        <h3>Kata Mereka</h3>
                    </div>
                    @if ($stories->count() > 0)

                    <div class="container swiper">
                        <div class="slide-container-katamereka">
                            <div class="card-wrapper swiper-wrapper">
                                @foreach ($stories as $story)
                                    <div class="card swiper-slide mb-2 mt-2">
                                        <div class="card wrapper">
                                            <div class="row card-kata d-flex">
                                                <div class="col-4 d-flex align-items-center mt-2 mb-2">
                                                    <img style="margin-left: 9px" src="{{ asset('storage/' . $story->image) }}">
                                                </div>
                                                <div class="col-8">
                                                    <div class="teks">
                                                        <div class="teks-body">
                                                            <p class="card-text"><small
                                                                    class="text-body-secondary">{{ \Carbon\Carbon::parse($story->updated_at)->format('M, d Y') }}</small>
                                                            </p>
                                                            <h5 class="card-title">{{ $story->title }}</h5>
                                                            <div class="preview-cerita">
                                                                <p class="card-text">
                                                                    {{ Str::limit(strip_tags($story->content, 100)) }}</p>
                                                            </div>
                                                        </div>
                                                        <button type="detail" class="selengkapnya-button" onclick="location.href='/stories/{{ $story->slug }}'"><a
                                                                href="/stories/{{ $story->slug }}">Selengkapnya</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5">Belum ada cerita wisatawan.</p>
                    @endif
                </div>
            </section>
            {{-- END KATA MEREKA --}}

            {{-- KOMENTAR --}}
            <section class="komentar mb-5 pb-3">
                @if ($reviews->count() > 0)
                    <div class="container swiper">
                        <div class="slide-container-komentar">
                            <div class="card-wrapper swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="card swiper-slide">
                                        <div class="card" style="border: none">
                                            <div class="card-komentar">
                                                <h5 class="card-title">{{ $review->name }}</h5>
                                                <p class="card-text">{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div>
                        </div>
                    </div>
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada ulasan.</p>
                @endif
            </section>

        </div>
        @include('partials.footer')
    </div>
@endsection

{{-- Javascript --}}
@section('script-body')
    <script>
        var swiper = new Swiper(".slide-container-kalender", {
            slidesPerView: 4,
            spaceBetween: 7,
            sliderPerGroup: 4,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 4,
                },
            },
        });

        var swiper = new Swiper(".slide-container-berita", {
            slidesPerView: 3,
            spaceBetween: 17,
            sliderPerGroup: 3,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            autoplay: true,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".slide-container-komentar", {
            slidesPerView: 3,
            spaceBetween: 20,
            sliderPerGroup: 3,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".slide-container-katamereka", {
            slidesPerView: 1,
            spaceBetween: 20,
            sliderPerGroup: 1,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            autoplay: true,
            autoplaySpeed: 2000,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1000: {
                    slidesPerView: 1,
                },
            },
        });


        $('.wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,

            autoplay: true,
            arrows: false,
            autoplaySpeed: 2000,

        });
    </script>
@endsection
