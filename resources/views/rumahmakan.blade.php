@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

        <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero rumah makan">
        <div class="hero-content">
            <div class="my-auto d-flex justify-content-center">
                <h1>Kuliner</h1>
            </div>
        </div>
    </section>

        <!--MENU BAR-->
        <div class="container category">
            <div class="card menubar border-0 rounded-3 d-flex justify-content-center align-items-center">
                <ul class="nav justify-content-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon" width="23" height="23" viewBox="0 0 54 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.18604 45.1679H50.8138L32.5009 6.50476C32.0079 5.46288 31.2292 4.58243 30.2553 3.96587C29.2815 3.3493 28.1525 3.02197 26.9999 3.02197C25.8473 3.02197 24.7183 3.3493 23.7445 3.96587C22.7706 4.58243 21.9919 5.46288 21.4989 6.50476L3.18604 45.1679Z M15.093 21.354L20.385 27.969L27 21.354L32.2919 29.292L38.9069 24" fill="#FCB600" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 22" fill="none">
                                <path d="M1 1H19 M16.3003 1H3.70029C3.20324 1 2.80029 1.42901 2.80029 1.95822V19.2062C2.80029 19.7354 3.20324 20.1644 3.70029 20.1644H16.3003C16.7973 20.1644 17.2003 19.7354 17.2003 19.2062V1.95822C17.2003 1.42901 16.7973 1 16.3003 1Z M8.2002 14.415H11.8002V20.1644H8.2002V14.415Z M5.94971 4.83301H6.84971M5.94971 7.70767H6.84971M9.54971 4.83301H10.4497M9.54971 7.70767H10.4497M13.1497 4.83301H14.0497M13.1497 7.70767H14.0497 M1 20.164H19M11.8 14.4147H12.7C12.9484 14.4147 13.1545 14.1981 13.1068 13.9385C12.8584 12.5778 11.5619 11.54 10 11.54C8.4385 11.54 7.1416 12.5773 6.8932 13.9385C6.8455 14.1981 7.0516 14.4147 7.3 14.4147H8.2" stroke="#AC0B05" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        Penginapan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 20" fill="none">
                                <path d="M1.26049 6.93699V6.92314C1.26048 5.55555 1.64395 4.21858 2.36253 3.08093C3.08111 1.94327 4.1026 1.05589 5.29814 0.530747C6.49367 0.00560203 7.80968 -0.133781 9.08013 0.130183C10.3506 0.394147 11.5185 1.04963 12.4367 2.01394C13.1591 1.63734 13.966 1.479 14.7682 1.55641C15.5705 1.63382 16.3368 1.94397 16.9827 2.45259C17.6285 2.96121 18.1286 3.64849 18.4278 4.43852C18.727 5.22854 18.8136 6.09055 18.678 6.9293C18.8774 6.94884 19.0707 7.01155 19.246 7.11354C19.4214 7.21552 19.5749 7.35458 19.6971 7.52204C19.8193 7.6895 19.9075 7.88176 19.9562 8.08682C20.0049 8.29189 20.0131 8.50536 19.9802 8.7139C19.3218 12.897 17.6934 15.5446 15.0978 16.6585V17.6923C15.0978 18.3044 14.8676 18.8913 14.4579 19.3241C14.0482 19.7569 13.4924 20 12.913 20H7.08674C6.50728 20 5.95156 19.7569 5.54182 19.3241C5.13208 18.8913 4.9019 18.3044 4.9019 17.6923V16.6585C2.3063 15.5446 0.67787 12.897 0.0195043 8.7139C-0.0122695 8.51089 -0.00516471 8.30322 0.0403981 8.10316C0.0859608 7.90311 0.169056 7.71474 0.284765 7.5492C0.400475 7.38366 0.546447 7.24433 0.714044 7.13943C0.881641 7.03454 1.06746 6.96623 1.26049 6.93853V6.93699ZM2.71705 6.92314H4.17362C4.17362 5.90309 4.55726 4.92481 5.24016 4.20352C5.92305 3.48223 6.84926 3.07701 7.81502 3.07701C8.78078 3.07701 9.70698 3.48223 10.3899 4.20352C11.0728 4.92481 11.4564 5.90309 11.4564 6.92314H12.913C12.913 5.49506 12.3759 4.12547 11.4198 3.11566C10.4638 2.10586 9.16708 1.53856 7.81502 1.53856C6.46295 1.53856 5.16627 2.10586 4.21021 3.11566C3.25416 4.12547 2.71705 5.49506 2.71705 6.92314ZM5.63018 6.92314H9.99986C9.99986 6.31111 9.76967 5.72414 9.35993 5.29137C8.9502 4.85859 8.39447 4.61546 7.81502 4.61546C7.23556 4.61546 6.67984 4.85859 6.2701 5.29137C5.86036 5.72414 5.63018 6.31111 5.63018 6.92314ZM15.6309 6.92314H17.1909C17.3009 6.46849 17.3111 5.99332 17.2209 5.53384C17.1306 5.07437 16.9423 4.64271 16.6702 4.27177C16.3981 3.90083 16.0494 3.60038 15.6507 3.39334C15.252 3.18629 14.8138 3.0781 14.3695 3.07701C14.02 3.07701 13.6879 3.14162 13.3791 3.26009C13.6369 3.69701 13.8495 4.16777 14.0127 4.66162C14.2901 4.58894 14.5816 4.6039 14.8511 4.70465C15.1205 4.8054 15.356 4.9875 15.5284 5.22835C15.7007 5.4692 15.8023 5.7582 15.8205 6.05948C15.8388 6.36077 15.7728 6.66108 15.6309 6.92314ZM13.6413 16.9231H6.35846V17.6923C6.35846 17.8963 6.43519 18.092 6.57176 18.2362C6.70834 18.3805 6.89358 18.4615 7.08674 18.4615H12.913C13.1061 18.4615 13.2914 18.3805 13.428 18.2362C13.5645 18.092 13.6413 17.8963 13.6413 17.6923V16.9231ZM5.84575 15.3846H14.154C16.4641 14.6 17.9265 12.3816 18.544 8.4616H1.45567C2.07325 12.3816 3.53564 14.6 5.84575 15.3846Z" fill="#FCB600"/>
                            </svg>
                        Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 17" fill="none">
                                <path d="M1 4.36L3.72187 6.53747C3.90158 6.68128 4.12811 6.76 4.36205 6.76H15.6379C15.8719 6.76 16.0984 6.68128 16.2781 6.53747L19 4.36M4.5 10.12H4.51M15.5 10.12H15.51M6.16065 1H13.8394C14.5571 1 15.2198 1.36919 15.5758 1.96741L18.473 6.83459C18.8183 7.41482 19 8.07146 19 8.73981V14.44C19 14.9702 18.5523 15.4 18 15.4H17C16.4477 15.4 16 14.9702 16 14.44V13.48H4V14.44C4 14.9702 3.55228 15.4 3 15.4H2C1.44772 15.4 1 14.9702 1 14.44V8.73981C1 8.07146 1.18166 7.41482 1.52703 6.83459L4.42416 1.96741C4.78024 1.36919 5.44293 1 6.16065 1ZM5 10.12C5 10.3851 4.77614 10.6 4.5 10.6C4.22386 10.6 4 10.3851 4 10.12C4 9.85494 4.22386 9.64 4.5 9.64C4.77614 9.64 5 9.85494 5 10.12ZM16 10.12C16 10.3851 15.7761 10.6 15.5 10.6C15.2239 10.6 15 10.3851 15 10.12C15 9.85494 15.2239 9.64 15.5 9.64C15.7761 9.64 16 9.85494 16 10.12Z" fill="#8F010A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        Biro Perjalanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 19 19" fill="none">
                                <g clip-path="url(#clip0_648_1191)">
                                    <path d="M3.99 6.08008C1.79721 6.08008 0 7.87178 0 10.0587C0 10.9061 0.27056 11.6936 0.72865 12.341L3.50322 17.1373C3.89177 17.645 4.15017 17.5487 4.47336 17.1107L7.5335 11.9028C7.59525 11.7907 7.6437 11.6718 7.68607 11.5502C7.88026 11.0769 7.98011 10.5702 7.98 10.0587C7.98 7.87178 6.18336 6.08008 3.99 6.08008ZM3.99 7.94436C5.17104 7.94436 6.1104 8.88125 6.1104 10.0589C6.1104 11.2365 5.17104 12.173 3.99 12.173C2.80915 12.173 1.8696 11.2363 1.8696 10.0589C1.8696 8.88125 2.80915 7.94436 3.99 7.94436Z" fill="#EBAA00"/>
                                    <path d="M16.6727 0C15.3936 0 14.3452 1.04519 14.3452 2.32104C14.3452 2.81523 14.5029 3.27465 14.7702 3.65218L16.3889 6.45012C16.6155 6.74614 16.7662 6.6899 16.9547 6.43454L18.7397 3.39644C18.7758 3.33127 18.8041 3.26192 18.8286 3.19086C18.942 2.91487 19.0002 2.61939 19.0002 2.32104C19.0002 1.045 17.9522 0 16.6727 0ZM16.6727 1.08756C17.3617 1.08756 17.9096 1.634 17.9096 2.32104C17.9096 3.00789 17.3617 3.55414 16.6727 3.55414C15.984 3.55414 15.4358 3.00789 15.4358 2.32104C15.4358 1.634 15.984 1.08756 16.6727 1.08756Z" fill="#EBAA00"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7596 7.1084C16.3327 7.1179 15.9046 7.13595 15.4758 7.16768L15.5419 8.21876C15.9538 8.18892 16.3664 8.16973 16.7794 8.16119L16.7596 7.1084ZM14.4844 7.2642C13.8251 7.34609 13.1601 7.46275 12.5027 7.65028L12.7502 8.66887C13.3476 8.49863 13.9666 8.38862 14.5953 8.31053L14.4844 7.2642ZM11.5183 8.00292C11.3213 8.08987 11.1306 8.19036 10.9475 8.30369L10.9467 8.30464L10.9456 8.30502C10.6844 8.46956 10.409 8.67837 10.1843 8.9818C10.0214 9.20163 9.88825 9.4796 9.85709 9.8083L10.8251 9.91565C10.8324 9.83851 10.8719 9.73667 10.9429 9.64091H10.9433V9.64053C11.0579 9.48549 11.2297 9.3447 11.4339 9.21588L11.4347 9.2155C11.5803 9.12564 11.7319 9.04591 11.8884 8.97686L11.5183 8.00292ZM11.0199 10.3846L10.3923 11.1892C10.5411 11.3253 10.6971 11.4298 10.8478 11.5172L10.8497 11.5181L10.8516 11.5192C11.3516 11.8037 11.8673 11.9642 12.3453 12.1166L12.6201 11.1062C12.1422 10.9538 11.6917 10.8067 11.3057 10.5875C11.1951 10.5233 11.0982 10.4562 11.0199 10.3846ZM13.5535 11.3904L13.2853 12.4026L13.4122 12.4421L13.568 12.4919C14.0836 12.6596 14.5776 12.8388 15.0192 13.0867L15.4672 12.1519C14.9333 11.8519 14.3791 11.6559 13.845 11.4822L13.8435 11.4818L13.6835 11.4307L13.5535 11.3904ZM16.3783 12.8534L15.6899 13.5982C15.8525 13.7744 15.9743 13.9862 16.0336 14.2051L16.034 14.2062L16.0344 14.2079C16.1051 14.4635 16.1052 14.7641 16.05 15.0677L17.0045 15.2714C17.0824 14.8427 17.095 14.3721 16.9669 13.9075C16.8554 13.4968 16.6426 13.1399 16.3783 12.8534ZM15.7167 15.7023C15.6115 15.8134 15.4953 15.9135 15.3698 16.001H15.3694C15.0274 16.2415 14.6307 16.4228 14.2092 16.5786L14.5235 17.5749C14.9844 17.4045 15.4577 17.1955 15.9 16.8843L15.9012 16.8833L15.9018 16.8829C16.0834 16.7558 16.2514 16.6101 16.4032 16.4484L15.7167 15.7023ZM13.3151 16.8592C12.7046 17.0234 12.0807 17.1484 11.4491 17.2544L11.5981 18.2954C12.2481 18.1862 12.9007 18.0556 13.5494 17.8812L13.3151 16.8592ZM10.4989 17.398C9.86317 17.4849 9.22401 17.5557 8.58295 17.6162L8.66693 18.6653C9.31787 18.6042 9.96995 18.5321 10.6211 18.443L10.4989 17.398ZM7.61946 17.6988C6.97707 17.7497 6.33316 17.7911 5.68868 17.8261L5.73732 18.8779C6.38807 18.8428 7.03939 18.8008 7.69052 18.7491L7.61946 17.6988ZM4.72025 17.8736C4.33398 17.8917 3.94676 17.9065 3.55859 17.9202L3.59051 18.9729C3.98111 18.9595 4.37163 18.9439 4.76205 18.9262L4.72025 17.8736Z" fill="#EBAA00"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_648_1191">
                                        <rect width="19" height="19" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        Peta Wisata</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--SEARCH-->
                <!-- <section class="search">
                    <div class="row search">
                        <div class="col teks-search w-100">
                            <h4>Temukan Makanan Favoritmu di Sini!</h4>
                        </div>
                        <div class="col category-search w-100 mb-3">
                            <select class="form-select">
                                <option selected>Resto & Cafe</option>
                                <option value="1">Makanan Tradisional</option>
                            </select>
                        </div>
                        <div class="col input-search w-100">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Makanan Favoritmu!" style="width: 400px; text-align: left">
                            <button style="border: none; background-color: none">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5 16.958L21.5 21.958" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </section> -->
        <div class="container">
            <h3 class="title-heading mt-5">Temukan Makanan Favoritmu di Sini!</h3>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row-search">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <select name="" id="" class="form-control">
                                    <option value="">- Kategori Rumah Makan -</option>
                                    <option value="">Restoran & Cafe</option>
                                    <option value="">Makanan Tradisional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0" placeholder="Cari Rumah Makan">
                                    <div class="input-group-text bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- CARD RESTAURANT-->

        <!-- <div class="container" margin=0px 80px 0px 80px">
        <section class="cardkuliner mt-3">
                    <div class="row w-100% py-2">
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi qui doloribus nostrum saepe eos ipsum doloremque reprehenderit, obcaecati quis eum, eius aliquid nisi iure molestiae dolores odit fuga omnis inventore!</p>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio voluptas quos illum maxime explicabo cum voluptatum quibusdam recusandae impedit praesentium expedita nam odit animi mollitia est aperiam, perspiciatis id.</p>
                                <p class="card-price"> <h5>Rp. 16.000</h> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
            <div style="clear: both;"></div> -->

        <!-- <div class="container">
        <section class="card-katalog">
            <div class="row">
                <div class="col cardlist">
                    <div class="gambar-card">
                        <img src="../assets/pict/destinasi.jpg" class="card-img-top" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card ">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </section>
        </div> -->

        <div class="container mt-3">
            <div class="container-card">
                <div class="card-wrapper d-flex mx-auto justify-content-center" style="flex-wrap: wrap">
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="card-button w-100 d-flex justify-content-center">
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="card-button w-100 d-flex justify-content-center">
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="card-button w-100 d-flex justify-content-center">
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="card-button w-100 d-flex justify-content-center">
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <!-- FOOTER-->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
