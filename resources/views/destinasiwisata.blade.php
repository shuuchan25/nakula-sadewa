@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')
<head>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<!--HERO-->
<section class="hero-image">
    <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
    <div class="hero-content">
        <div class="my-auto d-flex justify-content-center">
            <h1>Destinasi</h1>
        </div>
    </div>
</section>

{{-- MENUBAR --}}
<div class="container category">
    <div class="card menubar border-0 rounded-3 d-flex justify-content-center align-items-center">
            <ul class="nav justify-content-center gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg fill="#AC0B05" width="30" height="30" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier"></g><g id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"><title></title><polygon points="10.96 17.68 7 9.76 1.38 21 22.55 21 16 6.58 10.96 17.68"></polygon><circle cx="11" cy="6" r="3"></circle></g></svg>
                    Destinasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-auto" href="#">
                        <svg fill="#FCB600" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 32 26.435" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="bed"> <g id="bed_1_"> <path d="M31.094,11.061l-10.991,4.016C19.556,15.275,19,15.914,19,16.494v9.193c0,0.58,0.578,0.889,1.123,0.684l10.98-4.102 C31.648,22.064,32,21.424,32,20.844v-9.092C32,11.172,31.641,10.861,31.094,11.061z"></path> <path d="M10.971,3.588L3.536,6.316c-0.518,0.189-0.617,0.66-0.224,1.045l2.786,2.725c0.396,0.385,1.133,0.525,1.642,0.314 l7.55-3.146c0.508-0.211,0.58-0.676,0.158-1.031l-2.771-2.334C12.256,3.533,11.488,3.398,10.971,3.588z"></path> <path d="M16.223,7.816c-0.155,0.144-0.333,0.271-0.549,0.36l-7.551,3.147c-0.278,0.116-0.586,0.175-0.914,0.175 c-0.019,0-0.035-0.005-0.053-0.005c-0.668-0.005-1.322-0.267-1.759-0.693L3.458,8.953c0,0-1.458,0.359-1.458,1.645v2.512 c0,0.549,0.655,1.211,1.143,1.467L18,22.307v-5.813c0-1.074,0.895-2.043,1.76-2.357l5.272-1.926L16.223,7.816z"></path> <path d="M1,13.109v-2.512c0-1.319,0.939-2.081,1.708-2.429L2.613,8.076C2.174,7.648,1.989,7.094,2.105,6.556 c0.115-0.538,0.512-0.968,1.086-1.178l7.436-2.729c0.266-0.098,0.561-0.147,0.875-0.147c0.535,0,1.068,0.149,1.498,0.402V0.752 c0-0.58-0.359-0.891-0.906-0.691L1.103,4.076C0.556,4.275,0,4.914,0,5.494v9.193c0,0.58,0.578,0.889,1.123,0.684l0.932-0.348 C1.521,14.563,1,13.871,1,13.109z"></path> </g> </g> <g id="Layer_1"> </g> </g></svg>
                    Akomodasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg fill="#AC0B05" height="30" width="31" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32.762 32.762" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="b193_chinese_bowl"> <path d="M6.305,15.604l-4.617,1.764c0.045,0.344,0.108,0.486,0.183,0.816l5.184-2.348C6.916,15.797,6.436,15.643,6.305,15.604z"></path> <path d="M32.325,12.534c0-1.193-1.273-2.271-3.417-3.107l-0.527,0.199c2.228,0.791,3.594,1.811,3.594,2.908 c0,2.445-6.812,4.516-14.873,4.516c-2.418,0-4.721-0.189-6.762-0.512l-8.237,2.715c1.739,5.602,7.802,9.744,14.999,9.744 c8.547,0,15.501-5.846,15.501-13.035c0-0.844-0.097-2.373-0.286-3.271C32.32,12.635,32.325,12.584,32.325,12.534z"></path> <path d="M3.941,14.707c-0.928-0.584-1.716-1.498-1.716-2.174c0-2.449,6.812-4.52,14.876-4.52c0.312,0,0.622,0.006,0.929,0.01 l0.749-0.334c-0.551-0.02-1.11-0.027-1.678-0.027c-8.54,0-15.229,2.139-15.229,4.871c0,0.068,0.005,0.105,0.016,0.125 c-0.153,0.708-0.246,2.274-0.277,3.139L3.941,14.707z"></path> <polygon points="29.514,3.766 0,16.951 30.188,5.393 "></polygon> <polygon points="32.762,6.885 32.087,5.258 2.572,18.448 "></polygon> </g> <g id="Capa_1_266_"> </g> </g> </g></svg>
                    Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg fill="#FCB600" height="30" width="30" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-330 131 299 299" xml:space="preserve" stroke="#000000" stroke-width="0.0029900000000000005"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Page 1</title> <desc>Created with Sketch.</desc> <g> <path d="M-60.4,366.1h-120.7h-120.7c-2.9,0-5.2,0.2-5.2,10.5c0,10.3,2.4,10.3,5.2,10.3h15.8v18.3c0,2.9,2.4,5.2,5.2,5.2h31.3 c2.9,0,5.2-2.3,5.2-5.2v-18.3h63.1h63.2v18.3c0,2.9,2.3,5.2,5.2,5.2h31.3c2.9,0,5.3-2.3,5.3-5.2v-18.3h15.7c2.9,0,5.2,0.2,5.2-10.3 C-55.1,366.1-57.5,366.1-60.4,366.1z"></path> <path d="M-301.9,357.2h241.2c2.9,0,5.3-2.4,5.3-5.2v-21c0-0.1,0-0.1,0-0.1c-0.2-44.5-2.4-61.7-31.7-68.3 c-3.2-77.6-20.5-77.6-94.1-77.6c-73.5,0-90.5,0-93.6,77.5c-30,6.5-32.1,23.7-32.2,68.4c0,0,0,0.1,0,0.1v21 C-307.2,354.9-304.8,357.2-301.9,357.2z M-181.4,300.2c45.6,0,55.4,0.1,54.8,10H-236C-236.4,300.2-226.9,300.2-181.4,300.2z M-233.9,320.9c-0.2-0.7-0.3-1.4-0.5-2h106c-0.2,0.6-0.3,1.2-0.5,1.8c-0.5,1.9-1,3.7-1.4,5.3h-102.3 C-233,324.4-233.4,322.7-233.9,320.9z M-144.6,341.5h-36.7h-36.7c-7.4,0-9.6,0-12-6.9h97.3C-135.2,341.2-137.3,341.5-144.6,341.5z M-97,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7,15.7-15.7,15.7c-8.7,0-15.7-7-15.7-15.7C-112.8,317.2-105.7,310.2-97,310.2z M-244.4,213.4c6.8-7.5,30.4-7.5,63-7.5c32.8,0,56.5,0,63.4,7.6c6,6.5,8.5,24.6,9.6,46.2c-17.7-1.3-41.3-1.3-72.7-1.3 c-31.4,0-55,0-72.7,1.3C-252.8,238.1-250.3,219.9-244.4,213.4z M-264.9,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7.1,15.7-15.7,15.7 c-8.7,0-15.7-7-15.7-15.7C-280.6,317.2-273.6,310.2-264.9,310.2z"></path> </g> </g></svg>
                    Paket Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <svg width="30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--gis" preserveAspectRatio="xMidYMid meet" fill="#AC0B05" stroke="currentColor" stroke-width="0.9"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21 32C9.459 32 0 41.43 0 52.94c0 4.46 1.424 8.605 3.835 12.012l14.603 25.244c2.045 2.672 3.405 2.165 5.106-.14l16.106-27.41c.325-.59.58-1.216.803-1.856A20.668 20.668 0 0 0 42 52.94C42 41.43 32.544 32 21 32zm0 9.812c6.216 0 11.16 4.931 11.16 11.129c0 6.198-4.944 11.127-11.16 11.127c-6.215 0-11.16-4.93-11.16-11.127c0-6.198 4.945-11.129 11.16-11.129z" fill="#AC0B05"></path><path d="M87.75 0C81.018 0 75.5 5.501 75.5 12.216c0 2.601.83 5.019 2.237 7.006l8.519 14.726c1.193 1.558 1.986 1.262 2.978-.082l9.395-15.99c.19-.343.339-.708.468-1.082a12.05 12.05 0 0 0 .903-4.578C100 5.5 94.484 0 87.75 0zm0 5.724c3.626 0 6.51 2.876 6.51 6.492c0 3.615-2.884 6.49-6.51 6.49c-3.625 0-6.51-2.875-6.51-6.49c0-3.616 2.885-6.492 6.51-6.492z" fill="#AC0B05"></path><path d="M88.209 37.412c-2.247.05-4.5.145-6.757.312l.348 5.532a126.32 126.32 0 0 1 6.513-.303zm-11.975.82c-3.47.431-6.97 1.045-10.43 2.032l1.303 5.361c3.144-.896 6.402-1.475 9.711-1.886zM60.623 42.12a24.52 24.52 0 0 0-3.004 1.583l-.004.005l-.006.002c-1.375.866-2.824 1.965-4.007 3.562c-.857 1.157-1.558 2.62-1.722 4.35l5.095.565c.038-.406.246-.942.62-1.446h.002v-.002c.603-.816 1.507-1.557 2.582-2.235l.004-.002a19.64 19.64 0 0 1 2.388-1.256zM58 54.655l-3.303 4.235c.783.716 1.604 1.266 2.397 1.726l.01.005l.01.006c2.632 1.497 5.346 2.342 7.862 3.144l1.446-5.318c-2.515-.802-4.886-1.576-6.918-2.73c-.582-.338-1.092-.691-1.504-1.068zm13.335 5.294l-1.412 5.327l.668.208l.82.262c2.714.883 5.314 1.826 7.638 3.131l2.358-4.92c-2.81-1.579-5.727-2.611-8.538-3.525l-.008-.002l-.842-.269zm14.867 7.7l-3.623 3.92c.856.927 1.497 2.042 1.809 3.194l.002.006l.002.009c.372 1.345.373 2.927.082 4.525l5.024 1.072c.41-2.256.476-4.733-.198-7.178c-.587-2.162-1.707-4.04-3.098-5.548zM82.72 82.643a11.84 11.84 0 0 1-1.826 1.572h-.002c-1.8 1.266-3.888 2.22-6.106 3.04l1.654 5.244c2.426-.897 4.917-1.997 7.245-3.635l.006-.005l.003-.002a16.95 16.95 0 0 0 2.639-2.287zm-12.64 6.089c-3.213.864-6.497 1.522-9.821 2.08l.784 5.479c3.421-.575 6.856-1.262 10.27-2.18zm-14.822 2.836c-3.346.457-6.71.83-10.084 1.148l.442 5.522c3.426-.322 6.858-.701 10.285-1.17zm-15.155 1.583c-3.381.268-6.77.486-10.162.67l.256 5.536c3.425-.185 6.853-.406 10.28-.678zm-15.259.92c-2.033.095-4.071.173-6.114.245l.168 5.541a560.1 560.1 0 0 0 6.166-.246z" fill="#AC0B05" fill-rule="evenodd"></path></g></svg>
                Peta Wisata</a>
                </li>
              </ul>
    </div>
</div>{{-- end MENUBAR --}}

{{-- MENU KATEGORI --}}
<div class="wisata mt-5">
    <div class="tabs rounded">
        <ul class="nav nav-tabs border-0 justify-content-center">
            <li class="nav-item">
            <a class="nav-link active link" data-bs-toggle="tab" href="#alam"><h4>Alam</h4></a>
            </li>
            <li class="nav-item">
            <a class="nav-link link" data-bs-toggle="tab" href="#budaya"><h4>Budaya</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link link" data-bs-toggle="tab" href="#buatan"><h4>Buatan</h4></a>
            </li>
        </ul>


{{-- WISATA ALAM --}}
<!-- Tab panes -->
        <div class="tab-content pt-4 pb-5">
            <div class="tab-pane container active" id="alam">
                {{-- SEARCH --}}
                    <div class="row mt-4">
                        <div class="col-sm mt-2 search-wisata">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Cari Destinasi Alam">
                                <button class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-3 search d-flex justify-content-center mt-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Cari Destinasi Alam</option>
                                <option value="1">Bahari</option>
                                <option value="2">Ekowisata</option>
                                <option value="3">Petualangan</option>
                            </select>
                        </div>

                    </div>
                    {{-- end search --}}

                    {{-- CARDLIST --}}
                    {{-- <div class="card-wrapper-2 d-flex mx-auto mt-5" style="flex-wrap: wrap">
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang - Trenggalek Lorem, ipsum dolor.</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card-2">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang  - Trenggalek</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasialam">Lihat Detail</a></button>
                            </div>
                        </div>
                    </div>  end cardlist --}}

                    <!-- Start of Card Deck Layout -->
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-5">
                        <div class="col">
                          <div class="card-2 h-100">
                            <div class="content-img">
                                <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                            </div>
                                <div class="card-body">
                                    <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                </div>

                          </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2 h-100">
                              <div class="content-img">
                                  <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                              </div>
                                  <div class="card-body">
                                      <h5>Destinasi Wisata Alam Pertama KEdua Ketiga keemp</h5>
                                  </div>
                                  <div class="card-btn d-flex justify-content-center">
                                      <button onclick="window.location='detaildestinasialam'" class="detail-button">Lihat Detail</button>
                                  </div>

                            </div>
                        </div>
                    </div>

                 {{--end tab pane ALAM --}}

            </div>

            {{-- BUDAYA --}}
            <!-- Tab panes -->
            <div class="tab-pane container fade" id="budaya">
                {{-- SEARCH --}}
                    <div class="row mt-4">
                        <div class="col-sm-4 search d-flex justify-content-center mt-2">
                            <select name="" id="" class="form-control">
                                <option value="">Kategori Destinasi Budaya</option>
                                <option value="">Herritage/Religi</option>
                                <option value="">Desa Wisata</option>
                                <option value="">Wisata Belanja</option>
                            </select>
                        </div>
                        <div class="col-sm mt-2">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Cari Destinasi Budaya">
                                <button class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>
                    </div> {{--end search --}}
                    {{-- CARDLIST --}}
                    <div class="card-wrapper-2 d-flex justify-content-center mx-auto mt-5" style="flex-wrap: wrap">
                        <div class="card">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang - Trenggalek Lorem, ipsum dolor.</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="img-box">
                                <img src="../assets/pict/hero-wisata.jpg">
                            </div>
                            <div class="card-body">
                                <h5 style="font-weight: 600">Tiket Malang  - Trenggalek</h5>
                            </div>
                            <div class="card-btn w-100 d-flex justify-content-center">
                                <button type="detail" class="detail-button"><a href="detaildestinasibudaya">Lihat Detail</a></button>
                            </div>
                        </div>
                    </div>  {{--end cardlist --}}
            </div> {{--end tab pane BUDAYA --}}

            {{-- BUATAN --}}
            <!-- Tab panes -->
            <div class="tab-pane container fade" id="buatan">
                {{-- SEARCH --}}
                    <div class="row mt-4">
                        <div class="col-sm-4 search d-flex justify-content-center mt-2">
                            <select name="" id="" class="form-control">
                                <option value="">Kategori Destinasi Buatan</option>
                                <option value="">Mice</option>
                                <option value="">Olahraga</option>
                                <option value="">Edukasi</option>
                            </select>
                        </div>
                        <div class="col-sm mt-2">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Cari Destinasi Buatan">
                                <button class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        </div>
                    </div> {{--end search --}}
                    {{-- CARDLIST --}}
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-5">
                        {{-- <div class="col"> --}}
                            <div class="card-wrapper">
                                <div class="card" style="width: 15rem; margin: 10px">
                                    <div class="image-box">
                                        <img src="../assets/pict/hero-homepage.png">
                                    </div>
                                    <div class="card-body">
                                        <h5 style="font-weight: 600">Tiket Malang - Trenggalek Lorem, ipsum dolor.</h5>
                                    </div>
                                    <div class="card-button w-100 d-flex justify-content-center">
                                        <button type="detail" class="detail-button"><a href="detailtiketwisata">Lihat Detail</a></button>
                                    </div>
                                </div>
                                <div class="card" style="width: 15rem; margin: 10px">
                                    <div class="image-box">
                                        <img src="../assets/pict/hero-wisata.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 style="font-weight: 600">Paket Bahagia</h5>
                                    </div>
                                    <div class="card-button w-100 d-flex justify-content-center">
                                        <button type="detail" class="detail-button"><a href="detailpaketwisata">Lihat Detail</a></button>
                                    </div>
                                </div>
                                <div class="card " style="width: 15rem; margin: 10px">
                                    <div class="image-box">
                                        <img src="../assets/pict/hero-wisata.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 style="font-weight: 600">Tiket Malang</h5>
                                    </div>
                                    <div class="card-button w-100 d-flex justify-content-center">
                                        <button type="detail" class="detail-button"><a href="detailtiketwisata">Lihat Detail</a></button>
                                    </div>
                                </div>
                                <div class="card " style="width: 15rem; margin: 10px">
                                    <div class="image-box">
                                        <img src="../assets/pict/hero-wisata.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 style="font-weight: 600">Paket Bahagia Desa Mulya Jaya Kec. Maju Terus Trenggalek</h5>
                                    </div>
                                    <div class="card-button w-100 d-flex justify-content-center">
                                        <button type="detail" class="detail-button"><a href="detailpaketwisata">Lihat Detail</a></button>
                                    </div>
                                </div>
                                <div class="card " style="width: 15rem; margin: 10px">
                                    <div class="image-box">
                                        <img src="../assets/pict/hero-wisata.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 style="font-weight: 600">Tiket Malang</h5>
                                    </div>
                                    <div class="card-button w-100 d-flex justify-content-center">
                                        <button type="detail" class="detail-button"><a href="detailtiketwisata">Lihat Detail</a></button>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                      {{--end cardlist --}}
            </div> {{--end tab pane BUATAN --}}

        </div>{{--end TAB CONTENT --}}
    </div>{{--end TABS ROUNDED --}}
</div>{{--end CLASS WISATA --}}
</body>

@include('partials.footer')

@endsection











