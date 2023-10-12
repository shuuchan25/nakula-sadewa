@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- Swiper --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

<!-- Slick JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


{{-- HERO SECTION --}}
<section class="hero-wrapper position-relative">
    <div id="slider-autoplay" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="z-index: 99">
            @for($i = 0; $i < count($galleries); $i++)
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}" aria-current="{{ $i === 0 ? 'true' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
            @endfor
            {{-- <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner hero">
            @if ($galleries->count() > 0)
                @foreach($galleries as $key => $gallery)
                    <div class="carousel-item {{ $key === 0 ? 'active' : 'hero' }}">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="d-block w-100" alt="hero-{{ $key + 1 }}">
                    </div>
                @endforeach
            @else
                <div class="carousel-item active">
                    <img src="{{ asset('assets/pict/hero-homepage.png') }}" class="d-block w-100" alt="hero-1">
                </div>
            @endif
        </div>
    </div>
    <div class="carousel-caption">
        <div class="my-auto align-items-center justify-content-center">
            @php
                $words = explode(' ', $webprofile->slogan);
            @endphp

            @if(count($words) > 0)
                <h5>{{ $words[0] }}</h5> <!-- Display the first word -->
            @endif

            @if(count($words) > 1)
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
<section class="katalog mt-5 mb-5 pt-5 pb-5" id="katalog">
    <div class="container">
        <div class="row menu w-100">
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/atraksi'">
                        <a href="atraksi">
                            <svg width="54" height="48" viewBox="0 0 54 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.18604 45.1679H50.8138L32.5009 6.50476C32.0079 5.46288 31.2292 4.58243 30.2553 3.96587C29.2815 3.3493 28.1525 3.02197 26.9999 3.02197C25.8473 3.02197 24.7183 3.3493 23.7445 3.96587C22.7706 4.58243 21.9919 5.46288 21.4989 6.50476L3.18604 45.1679Z" stroke="#FCB600" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.093 21.354L20.385 27.969L27 21.354L32.2919 29.292L38.9069 24" stroke="#FCB600" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Atraksi</p>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/penginapan'">
                        <a href="penginapan">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.40649 4.40631H47.5938" stroke="#AC0B05" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M41.1159 4.40631H10.8847C9.69212 4.40631 8.72534 5.37309 8.72534 6.56568V45.4343C8.72534 46.6269 9.69212 47.5937 10.8847 47.5937H41.1159C42.3084 47.5937 43.2752 46.6269 43.2752 45.4343V6.56568C43.2752 5.37309 42.3084 4.40631 41.1159 4.40631Z" stroke="#AC0B05" stroke-width="5" stroke-linejoin="round"/>
                                <path d="M21.6814 34.6375H30.3189V47.5937H21.6814V34.6375Z" stroke="#AC0B05" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.283 13.0438H18.4423M16.283 19.5219H18.4423M24.9204 13.0438H27.0798M24.9204 19.5219H27.0798M33.5579 13.0438H35.7173M33.5579 19.5219H35.7173" stroke="#AC0B05" stroke-width="5" stroke-linecap="round"/>
                                <path d="M4.40649 47.5937H47.5938M30.3189 34.6375H32.4783C33.0743 34.6375 33.5687 34.1494 33.4543 33.5643C32.8583 30.498 29.7477 28.1594 26.0002 28.1594C22.2537 28.1594 19.142 30.4969 18.546 33.5643C18.4316 34.1494 18.9261 34.6375 19.5221 34.6375H21.6814" stroke="#AC0B05" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Akomodasi</p>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/kuliner'">
                        <a href="rumahmakan">
                            <svg width="64" height="63" viewBox="0 0 64 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.88832 21.9578V21.9148C4.88826 17.6723 6.07786 13.5248 8.30703 9.99555C10.5362 6.46632 13.7051 3.7135 17.4138 2.0844C21.1226 0.455306 25.2051 0.0229135 29.1463 0.84178C33.0875 1.66065 36.7108 3.69408 39.559 6.68554C41.8 5.51727 44.3031 5.02607 46.7918 5.26622C49.2806 5.50636 51.658 6.4685 53.6615 8.04632C55.665 9.62415 57.2165 11.7563 58.1446 14.2071C59.0728 16.6579 59.3414 19.332 58.9209 21.9339C59.5392 21.9945 60.139 22.1891 60.6829 22.5055C61.2269 22.8218 61.7032 23.2532 62.0823 23.7727C62.4613 24.2922 62.7349 24.8886 62.886 25.5248C63.0371 26.1609 63.0624 26.8232 62.9604 27.4701C60.9181 40.4467 55.8663 48.6603 47.8143 52.1157V55.3229C47.8143 57.2215 47.1002 59.0424 45.8292 60.3849C44.5581 61.7275 42.8341 62.4817 41.0365 62.4817H22.9624C21.1648 62.4817 19.4409 61.7275 18.1698 60.3849C16.8987 59.0424 16.1846 57.2215 16.1846 55.3229V52.1157C8.13262 48.6603 3.08091 40.4467 1.03853 27.4701C0.939965 26.8403 0.962005 26.1961 1.10335 25.5755C1.24469 24.9549 1.50247 24.3705 1.86142 23.857C2.22038 23.3435 2.67321 22.9112 3.19313 22.5858C3.71305 22.2604 4.28948 22.0485 4.88832 21.9626V21.9578ZM9.40685 21.9148H13.9254C13.9254 18.7504 15.1155 15.7156 17.234 13.478C19.3525 11.2405 22.2257 9.98339 25.2217 9.98339C28.2177 9.98339 31.0909 11.2405 33.2094 13.478C35.3279 15.7156 36.518 18.7504 36.518 21.9148H41.0365C41.0365 17.4847 39.3703 13.2359 36.4045 10.1033C33.4386 6.9707 29.416 5.21082 25.2217 5.21082C21.0273 5.21082 17.0048 6.9707 14.0389 10.1033C11.073 13.2359 9.40685 17.4847 9.40685 21.9148ZM18.4439 21.9148H31.9995C31.9995 20.0162 31.2854 18.1953 30.0143 16.8527C28.7432 15.5102 27.0193 14.756 25.2217 14.756C23.4241 14.756 21.7002 15.5102 20.4291 16.8527C19.158 18.1953 18.4439 20.0162 18.4439 21.9148ZM49.4681 21.9148H54.3075C54.6486 20.5044 54.6804 19.0303 54.4004 17.605C54.1205 16.1796 53.5362 14.8405 52.6921 13.6898C51.8479 12.539 50.7663 11.607 49.5294 10.9647C48.2926 10.3224 46.9333 9.98677 45.5551 9.98339C44.4706 9.98339 43.4404 10.1838 42.4825 10.5513C43.2822 11.9067 43.942 13.3672 44.448 14.8991C45.3087 14.6737 46.213 14.7201 47.0489 15.0327C47.8847 15.3452 48.6153 15.9101 49.15 16.6573C49.6846 17.4044 49.9997 18.301 50.0563 19.2356C50.1129 20.1702 49.9083 21.1019 49.4681 21.9148ZM43.2958 52.9366H20.7032V55.3229C20.7032 55.9557 20.9412 56.5627 21.3649 57.0102C21.7886 57.4577 22.3632 57.7091 22.9624 57.7091H41.0365C41.6357 57.7091 42.2104 57.4577 42.6341 57.0102C43.0578 56.5627 43.2958 55.9557 43.2958 55.3229V52.9366ZM19.1126 48.164H44.8863C52.0527 45.73 56.5893 38.8479 58.5052 26.6874H5.4938C7.40966 38.8479 11.9463 45.73 19.1126 48.164Z" fill="#FCB600"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Kuliner</p>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/travels/index'">
                        <a href="/travels/index">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_45_162)">
                                <path d="M2.62769 18.6861L10.9059 25.3086C11.4524 25.7459 12.1414 25.9854 12.8529 25.9854H47.1468C47.8585 25.9854 48.5474 25.7459 49.0939 25.3086L57.3722 18.6861M13.2725 36.2043H13.3029M46.7274 36.2043H46.7579M18.3231 8.4671H41.677C43.8597 8.4671 45.8753 9.58993 46.958 11.4094L55.7694 26.2122C56.8196 27.9769 57.3722 29.974 57.3722 32.0067V49.343C57.3722 50.9556 56.0106 52.2627 54.3308 52.2627H51.2895C49.6097 52.2627 48.2481 50.9556 48.2481 49.343V46.4233H11.7518V49.343C11.7518 50.9556 10.3901 52.2627 8.71041 52.2627H5.66905C3.98936 52.2627 2.62769 50.9556 2.62769 49.343V32.0067C2.62769 29.974 3.18018 27.9769 4.23057 26.2122L13.0418 11.4094C14.1248 9.58993 16.1402 8.4671 18.3231 8.4671ZM14.7931 36.2043C14.7931 37.0105 14.1123 37.6642 13.2725 37.6642C12.4326 37.6642 11.7518 37.0105 11.7518 36.2043C11.7518 35.3982 12.4326 34.7445 13.2725 34.7445C14.1123 34.7445 14.7931 35.3982 14.7931 36.2043ZM48.2481 36.2043C48.2481 37.0105 47.5672 37.6642 46.7274 37.6642C45.8877 37.6642 45.2068 37.0105 45.2068 36.2043C45.2068 35.3982 45.8877 34.7445 46.7274 34.7445C47.5672 34.7445 48.2481 35.3982 48.2481 36.2043Z" stroke="#8F010A" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_45_162">
                                <rect width="59.854" height="59.854" fill="white" transform="translate(0.437988 0.437927)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Paket Wisata</p>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/petawisata'">
                        <a href="petawisata">
                            <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_238_3279)">
                                <path d="M13.2774 19.5912C6.3696 19.5912 0.708008 25.2354 0.708008 32.1246C0.708008 34.7941 1.56033 37.2751 3.00341 39.3143L11.7439 54.4238C12.9679 56.0231 13.7819 55.7197 14.8 54.34L24.4401 37.934C24.6347 37.5809 24.7873 37.2062 24.9208 36.8232C25.5325 35.3322 25.847 33.7362 25.8467 32.1246C25.8467 25.2354 20.1869 19.5912 13.2774 19.5912ZM13.2774 25.4641C16.9979 25.4641 19.9571 28.4155 19.9571 32.1252C19.9571 35.835 16.9979 38.7852 13.2774 38.7852C9.55742 38.7852 6.59764 35.8344 6.59764 32.1252C6.59764 28.4155 9.55742 25.4641 13.2774 25.4641Z" fill="#EBAA00"/>
                                <path d="M53.2298 0.437927C49.2004 0.437927 45.8977 3.7305 45.8977 7.74969C45.8977 9.3065 46.3945 10.7538 47.2366 11.9431L52.3356 20.7572C53.0497 21.6897 53.5243 21.5125 54.1181 20.7081L59.7413 11.1374C59.8551 10.9321 59.9442 10.7137 60.0215 10.4898C60.3784 9.62038 60.562 8.68956 60.5619 7.74969C60.5619 3.7299 57.2604 0.437927 53.2298 0.437927ZM53.2298 3.86397C55.4001 3.86397 57.1263 5.58537 57.1263 7.74969C57.1263 9.91342 55.4001 11.6342 53.2298 11.6342C51.0601 11.6342 49.3333 9.91342 49.3333 7.74969C49.3333 5.58537 51.0601 3.86397 53.2298 3.86397Z" fill="#EBAA00"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M53.5047 22.8305C52.1598 22.8604 50.8112 22.9173 49.4603 23.0173L49.6686 26.3284C50.9663 26.2344 52.2661 26.1739 53.5669 26.147L53.5047 22.8305ZM46.3372 23.3213C44.2602 23.5793 42.1653 23.9468 40.0944 24.5375L40.8743 27.7463C42.7561 27.21 44.7061 26.8635 46.6867 26.6175L46.3372 23.3213ZM36.9933 25.6484C36.3728 25.9223 35.7721 26.2389 35.1953 26.5959L35.1929 26.5989L35.1893 26.6001C34.3664 27.1184 33.4991 27.7762 32.791 28.7321C32.278 29.4246 31.8585 30.3003 31.7603 31.3358L34.8099 31.6739C34.8326 31.4309 34.9571 31.1101 35.181 30.8084H35.1822V30.8073C35.5431 30.3188 36.0842 29.8753 36.7276 29.4695L36.73 29.4683C37.1886 29.1853 37.6662 28.9341 38.1593 28.7165L36.9933 25.6484ZM35.4234 33.1511L33.4464 35.686C33.9151 36.1145 34.4065 36.4437 34.8811 36.719L34.8871 36.722L34.8931 36.7256C36.4684 37.6216 38.0929 38.1274 39.5988 38.6074L40.4643 35.4244C38.9589 34.9444 37.5398 34.4811 36.3236 33.7904C35.9752 33.5881 35.67 33.3768 35.4234 33.1511ZM43.4049 36.3198L42.5598 39.5082L42.9596 39.6327L43.4504 39.7895C45.0748 40.3181 46.631 40.8825 48.022 41.6636L49.4334 38.7188C47.7515 37.7737 46.0056 37.156 44.3231 36.6089L44.3183 36.6077L43.8143 36.4467L43.4049 36.3198ZM52.3034 40.9286L50.1349 43.2748C50.6472 43.8297 51.0309 44.4971 51.2177 45.1866L51.2188 45.1902L51.22 45.1956C51.4427 46.0006 51.4433 46.9475 51.2691 47.904L54.2762 48.5456C54.5216 47.1953 54.5611 45.7127 54.1577 44.2493C53.8063 42.9552 53.136 41.8312 52.3034 40.9286ZM50.2193 49.9031C49.8879 50.2531 49.5217 50.5683 49.1263 50.844H49.1252C48.0478 51.6017 46.798 52.1727 45.4705 52.6635L46.4605 55.8023C47.9125 55.2654 49.4035 54.607 50.7969 53.6266L50.8005 53.6236L50.8023 53.6224C51.3745 53.2217 51.9038 52.763 52.3818 52.2535L50.2193 49.9031ZM42.6537 53.5476C40.7306 54.0647 38.765 54.4586 36.7755 54.7925L37.2447 58.072C39.2923 57.7278 41.3483 57.3166 43.3917 56.7671L42.6537 53.5476ZM33.7822 55.245C31.7795 55.5186 29.766 55.7418 27.7465 55.9322L28.0111 59.2373C30.0617 59.0446 32.1158 58.8177 34.167 58.537L33.7822 55.245ZM24.7113 56.1925C22.6876 56.3529 20.6592 56.4834 18.6289 56.5936L18.7822 59.9071C20.8322 59.7963 22.884 59.6641 24.9352 59.5013L24.7113 56.1925ZM15.5782 56.7432C14.3613 56.8001 13.1415 56.8467 11.9187 56.8898L12.0193 60.2063C13.2497 60.164 14.4799 60.115 15.7099 60.0591L15.5782 56.7432Z" fill="#EBAA00"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_238_3279">
                                <rect width="59.854" height="59.854" fill="white" transform="translate(0.708008 0.437927)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Peta Wisata</p>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button" onclick="location.href='/kalkulator'">
                        <a href="kalkulator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                                <path d="M32 18H45" stroke="#8F010A" stroke-width="5" stroke-linecap="round"/>
                                <path d="M32 35H45M32 41H45" stroke="#8F010A" stroke-width="5" stroke-linecap="round"/>
                                <path d="M41 3H17C9.26801 3 3 9.26801 3 17V41C3 48.732 9.26801 55 17 55H41C48.732 55 55 48.732 55 41V17C55 9.26801 48.732 3 41 3Z" stroke="#8F010A" stroke-width="5"/>
                                <path d="M11 19.2759H24M17.7241 26V13" stroke="#8F010A" stroke-width="5" stroke-linecap="round"/>
                                <path d="M13.4257 43.6788L22.5996 34.5049M22.9159 43.6788L13.7421 34.5049" stroke="#8F010A" stroke-width="5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Kalkulator</p>
            </div>
        </div>
    </div>
</section>
{{-- END KATALOG MENU --}}

{{-- KALKULATOR --}}
<section class="kalkulator-home">
    <div class="container">
        <div class="detail">
            <div class="banner col-md-12">
                <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
                <div class="content">
                    <div class="my-auto teks-kalkulator d-flex justify-content-center">
                        <h1 class="heading">NAKULA SADEWA</h1>
                    </div>
                    <div class="overlay">
                        <button class="button-kalkulator-home" onclick="location.href='/kalkulator'">KALKULATOR WISATA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END KALKULATOR --}}

{{-- ABOUT --}}
<section class="about  mt-5 mb-5 pb-5" id="about">
    <div class="container">
        <div class="col-12">
            <div class="content-about">
                <div class="col-lg-4 about-img my-auto">
                    @if ($webprofile->image)
                        <img src="{{ asset('storage/' . $webprofile->image) }}" alt="logo bem" class="img-fluid my-auto mx-auto">
                    @else
                        <img src="../assets/pict/hero-homepage.png" alt="logo bem" class="img-fluid my-auto mx-auto">
                    @endif
                </div>
                <div class="body-teks mx-3 w-100">
                    <div class="about-teks px-3 pt-3">
                        <h3>Tentang</h3>
                        <p>{!! $webprofile->shortdesc !!}</p>
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
        <div class="video mb-5 w-100">
            <iframe  src="{{ $webprofile->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section>
{{-- END VIDEO PROFILE --}}

{{-- KALENDER EVENT --}}
<section class="kalendar mb-5">
    <div class="container kalendar">
        <div class="row kalender-title">
            <h3>Kalender Event</h3>
        </div>
        @if ($events->count() > 0)
            <div class="container swiper pt-5">
                <div class="slide-container-kalender">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach($events as $event)
                            <div class="card swiper-slide ">
                                <div class="image-box">
                                    <img src="{{ asset('storage/' . $event->image) }}">
                                </div>
                                <div class="card-kalender">
                                    <h5>{{ $event->title }}</h5>
                                    <p class="lokasi">{{ $event->place }}</p>
                                    <p class="date" style="font-weight: bold; font-size: 11px">{{ $event->date }}</p>
                                </div>
                                <div class="card-button w-100 d-flex justify-content-center">
                                    <button type="detail" class="detail-button"><a href="kalenderevent">Lihat Detail</a></button>
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
        <div class="berita-title">
            <h3>Berita Terkini</h3>
        </div>
        @if ($articles->count() > 0)
            <div class="container swiper mb-5 pt-3">
                <div class="slide-container-berita">
                    <div class="berita-wrapper swiper-wrapper">
                        @foreach($articles as $article)
                            <div class="card swiper-slide">
                                <div class="card text-bg-dark">
                                    <img src="{{ asset('storage/' . $article->image) }}" class="card-img w-100">
                                    <div class="card-img-overlay berita-content">
                                        <a href="beritaterkini"><h5 class="card-title" style="margin-top: 110px">{{ $article->title }}</h5></a>
                                        <p class="card-text" style="color: white"><small>{{ $article->published_at }}</small></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="d-flex justify-content-center align-item-center mt-5 text-white">Belum ada berita ataupun artikel.</p>
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
            <div class="row res-slider">
                <div class="col-12 mt-5 wrapper justify">
                    @foreach($stories as $story)
                    <div class="row card-kata d-flex">
                        <div class="col-4 d-flex align-items-center mt-2 mb-2">
                            <img src="{{ asset('storage/' . $story->image) }}">
                        </div>
                        <div class="col-8 my-auto ">
                            <div class="teks">
                                <p class="card-text"><small class="text-body-secondary">{{ \Carbon\Carbon::parse($story->updated_at)->format('M, d Y') }}</small></p>
                                <h5 class="card-title">{{ $story->author }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($story->content, 100)) }}</p>
                                <button type="detail" class="detail-button"><a href="ceritawisatawan">Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($reviews as $review)
                        <div class="card swiper-slide">
                            <div class="card">
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


@include('partials.footer')
@endsection

{{-- Javascript --}}
@section('script-body')

<script>
var swiper = new Swiper(".slide-container-kalender", {
    sliderPerGroup: 3,
    spaceBetween: 10,
    slidesPerView: 3,
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
    spaceBetween: 20,
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


$('.wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,

        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,

});

</script>
@endsection
