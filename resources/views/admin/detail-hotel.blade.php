@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Penginapan</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='hotel'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col border-end ">
                        <div class="pb-3">
                            <h5>Nama Penginapan</h5>
                            <p>Desa Penginapan Pandean</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>Maju</p>
                        </div>
                        <div class="pb-3">
                            <h5>Fasilitas</h5>
                            <p>Maju</p>
                        </div>
                    </div>
                    <div class="col ps-4 ">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>Desa Penginapan Pandean</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <p>Maju</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>Rp50.000</p>
                        </div>
                    </div>
                </div>
                <div class="pt-3 border-bottom">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere facilis quas ea fugit
                            mollitia ullam obcaecati quasi, quidem nesciunt quis quae, necessitatibus ratione dolorum
                            dignissimos aperiam accusamus amet velit magnam tenetur optio laudantium, quo expedita. Quae
                            fugiat, modi quam rem pariatur excepturi iusto molestias facere soluta. Sequi praesentium
                            nobis molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla vel nostrum
                            maiores iste ab, accusamus numquam labore laudantium sint sequi cumque id dignissimos harum
                        </p>
                    </div>
                </div>
                <div class="w-100 pt-3">
                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        <div class="image-list pt-3">
                            <ul>
                                {{-- Hero Image --}}
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                {{-- Gallery Image --}}
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header d-flex align-items-center justify-content-between pb-lg-2 pb-2 pt-5">
                <div class="">
                    <h3 class="">Detail Kamar</h3>
                </div>
            </div>

            <div class="content-wrapper">
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between border-bottom">
                        <div class="pb-3">
                            <h5>Nama Kamar</h5>
                            <p>Desa Penginapan Pandean</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>Maju</p>
                        </div>

                </div>
                <div class="pt-3 border-bottom">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere facilis quas ea fugit
                            mollitia ullam obcaecati quasi, quidem nesciunt quis quae, necessitatibus ratione dolorum
                            dignissimos aperiam accusamus amet velit magnam tenetur optio laudantium, quo expedita. Quae
                            fugiat, modi quam rem pariatur excepturi iusto molestias facere soluta. Sequi praesentium
                            nobis molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla vel nostrum
                            maiores iste ab, accusamus numquam labore laudantium sint sequi cumque id dignissimos harum
                        </p>
                    </div>
                </div>
                <div class="w-100 pt-3">
                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        <div class="image-list pt-3">
                            <ul>
                                {{-- Hero Image --}}
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                {{-- Gallery Image --}}
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="image-card">
                                        <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png"
                                            alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
