@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')
<section class="kalkulator">
    <div class="container w-100 mb-5">
        <div class="button-back-kalkulator d-flex my-auto">
            <button class="back-btn">
                <a href="../#">
                    <svg width="25" height="25" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1287 18.9992H2M2 18.9992L17.4218 2M2 18.9992L17.4218 35.9983" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </button>
        <h5>Kalkulator</h5></div>
        <div class="kalkulator-wrap-card mt-3 mb-3">
            <div class="row kalkulator-card">
                <div class="col-2 kalkulator-header">
                    <img src="../assets/pict/hero-homepage.png" alt="">
                </div>
                <div class="col-6 kalkulator-content">
                    <h2>Hotel Queen</h2>
                    <div class="items-body">
                        <div class=" items">
                            <p>Suit Room</p>
                            <p>Regular Room</p>
                            <p>Ballroom</p>
                        </div>
                        <div class="quantitiy">
                            <p>1</p>
                            <p>1</p>
                            <p>1</p>
                        </div>
                        <div class="price">
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col summary-content">
                    <div class="summary">
                        <div class="x-button">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
                                    <path d="M24.375 0H5.625C2.51769 0 0 2.51769 0 5.625V24.375C0 27.4823 2.51769 30 5.625 30H24.375C27.4823 30 30 27.4823 30 24.375V5.625C30 2.51769 27.4823 0 24.375 0ZM21.6692 20.07L20.0677 21.6704C19.7746 21.9646 19.2946 21.9646 19.0015 21.6704L15 17.6688L10.9996 21.6692C10.7054 21.9635 10.2265 21.9635 9.93231 21.6669L8.33077 20.07C8.03885 19.7746 8.03885 19.2981 8.33077 19.0015L12.3323 15.0012L8.33192 11.0008C8.03885 10.7054 8.03885 10.2254 8.33192 9.93346L9.93346 8.33192C10.2277 8.03539 10.7077 8.03539 11.0008 8.33192L15 12.3335L19.0015 8.33192C19.2958 8.03539 19.7758 8.03539 20.0677 8.33192L21.6692 9.93115C21.9623 10.2254 21.9623 10.7054 21.6704 11.0008L17.6688 15.0012L21.6704 19.0015C21.9612 19.2981 21.9612 19.7746 21.6692 20.07Z" fill="#FF0000"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row total-price">
                <h5>Rp 3.000.000</h5>
            </div>
        </div>

        <div class="kalkulator-wrap-card mt-3 mb-3">
            <div class="row kalkulator-card">
                <div class="col-2 kalkulator-header">
                    <img src="../assets/pict/hero-desawisata.png" alt="">
                </div>
                <div class="col-8 kalkulator-content">
                    <h2>Hotel Queen</h2>
                    <div class="items-body">
                        <div class=" items">
                            <p>Suit Room  Lorem ipsum dolor sit amet.</p>
                            <p>Regular</p>
                            <p>Ballroom</p>
                        </div>
                        <div class="quantitiy">
                            <p>1</p>
                            <p>1</p>
                            <p>1</p>
                        </div>
                        <div class="price">
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 kalkulator-items">
                    <h6>Hotel Queen</h6>
                    <p>Nama Kamar</p>
                    <p>500.000/Room</p>
                </div>
                <div class="col-4">

                </div>
            </div>
            <div class="row total-price">
                <h5>Rp 3.000.000</h5>
            </div>
        </div>

        <div class="menu d-flex w-100 mt-5">
            <div class="menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="destinasiwisata">
                            <svg width="54" height="48" viewBox="0 0 54 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.18604 45.1679H50.8138L32.5009 6.50476C32.0079 5.46288 31.2292 4.58243 30.2553 3.96587C29.2815 3.3493 28.1525 3.02197 26.9999 3.02197C25.8473 3.02197 24.7183 3.3493 23.7445 3.96587C22.7706 4.58243 21.9919 5.46288 21.4989 6.50476L3.18604 45.1679Z" stroke="#FCB600" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.093 21.354L20.385 27.969L27 21.354L32.2919 29.292L38.9069 24" stroke="#FCB600" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Destinasi Wisata</p>
            </div>
            <div class="menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
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
                <p style="text-align: center">Penginapan</p>
            </div>
            <div class="menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="rumahmakan">
                            <svg width="64" height="63" viewBox="0 0 64 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.88832 21.9578V21.9148C4.88826 17.6723 6.07786 13.5248 8.30703 9.99555C10.5362 6.46632 13.7051 3.7135 17.4138 2.0844C21.1226 0.455306 25.2051 0.0229135 29.1463 0.84178C33.0875 1.66065 36.7108 3.69408 39.559 6.68554C41.8 5.51727 44.3031 5.02607 46.7918 5.26622C49.2806 5.50636 51.658 6.4685 53.6615 8.04632C55.665 9.62415 57.2165 11.7563 58.1446 14.2071C59.0728 16.6579 59.3414 19.332 58.9209 21.9339C59.5392 21.9945 60.139 22.1891 60.6829 22.5055C61.2269 22.8218 61.7032 23.2532 62.0823 23.7727C62.4613 24.2922 62.7349 24.8886 62.886 25.5248C63.0371 26.1609 63.0624 26.8232 62.9604 27.4701C60.9181 40.4467 55.8663 48.6603 47.8143 52.1157V55.3229C47.8143 57.2215 47.1002 59.0424 45.8292 60.3849C44.5581 61.7275 42.8341 62.4817 41.0365 62.4817H22.9624C21.1648 62.4817 19.4409 61.7275 18.1698 60.3849C16.8987 59.0424 16.1846 57.2215 16.1846 55.3229V52.1157C8.13262 48.6603 3.08091 40.4467 1.03853 27.4701C0.939965 26.8403 0.962005 26.1961 1.10335 25.5755C1.24469 24.9549 1.50247 24.3705 1.86142 23.857C2.22038 23.3435 2.67321 22.9112 3.19313 22.5858C3.71305 22.2604 4.28948 22.0485 4.88832 21.9626V21.9578ZM9.40685 21.9148H13.9254C13.9254 18.7504 15.1155 15.7156 17.234 13.478C19.3525 11.2405 22.2257 9.98339 25.2217 9.98339C28.2177 9.98339 31.0909 11.2405 33.2094 13.478C35.3279 15.7156 36.518 18.7504 36.518 21.9148H41.0365C41.0365 17.4847 39.3703 13.2359 36.4045 10.1033C33.4386 6.9707 29.416 5.21082 25.2217 5.21082C21.0273 5.21082 17.0048 6.9707 14.0389 10.1033C11.073 13.2359 9.40685 17.4847 9.40685 21.9148ZM18.4439 21.9148H31.9995C31.9995 20.0162 31.2854 18.1953 30.0143 16.8527C28.7432 15.5102 27.0193 14.756 25.2217 14.756C23.4241 14.756 21.7002 15.5102 20.4291 16.8527C19.158 18.1953 18.4439 20.0162 18.4439 21.9148ZM49.4681 21.9148H54.3075C54.6486 20.5044 54.6804 19.0303 54.4004 17.605C54.1205 16.1796 53.5362 14.8405 52.6921 13.6898C51.8479 12.539 50.7663 11.607 49.5294 10.9647C48.2926 10.3224 46.9333 9.98677 45.5551 9.98339C44.4706 9.98339 43.4404 10.1838 42.4825 10.5513C43.2822 11.9067 43.942 13.3672 44.448 14.8991C45.3087 14.6737 46.213 14.7201 47.0489 15.0327C47.8847 15.3452 48.6153 15.9101 49.15 16.6573C49.6846 17.4044 49.9997 18.301 50.0563 19.2356C50.1129 20.1702 49.9083 21.1019 49.4681 21.9148ZM43.2958 52.9366H20.7032V55.3229C20.7032 55.9557 20.9412 56.5627 21.3649 57.0102C21.7886 57.4577 22.3632 57.7091 22.9624 57.7091H41.0365C41.6357 57.7091 42.2104 57.4577 42.6341 57.0102C43.0578 56.5627 43.2958 55.9557 43.2958 55.3229V52.9366ZM19.1126 48.164H44.8863C52.0527 45.73 56.5893 38.8479 58.5052 26.6874H5.4938C7.40966 38.8479 11.9463 45.73 19.1126 48.164Z" fill="#FCB600"/>
                            </svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Kuliner</p>
            </div>
            <div class="menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="paketwisata">
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
        </div>

        <div class="calculate-button w-100 d-flex justify-content-center mt-5">
            <button type="detail" class="detail-button"><a href="">Kalkulasi</a></button>
        </div>
        <div class="total-summary ">
            <div class="total-summary-body mx-auto mt-3">
                <h5>Total</h5>
                <h6>Rp 6.000.000</h6>
            </div>
        </div>
        <div class="calculate-toggler w-100 d-flex justify-content-center mt-2">
            <button type="detail" class="beranda-button"><a href="">Beranda</a></button>
            <button type="detail" class="cetak-button"><a href="">Cetak Hasil</a></button>
        </div>
    </div>
</section>

@include('partials.footer')


@endsection
