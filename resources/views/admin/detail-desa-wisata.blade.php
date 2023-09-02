@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Desa Wisata</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='desa-wisata'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between">
                    <div class="col border-end border-bottom">
                        <div class="pb-3">
                            <h5>Nama Wisata</h5>
                            <p>Desa Wisata Pandean</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>Maju</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>Rp50.000</p>
                        </div>
                        <div class="pb-3">
                            <h5>Jam Operasional</h5>
                            <p>09.00 - 17.00</p>
                        </div>
                    </div>
                    <div class="col ps-4 border-bottom">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>Desa Wisata Pandean</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <p>Maju</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>Rp50.000</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Video</h5>
                            <p>09.00 - 17.00</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-4">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere facilis quas ea fugit
                            mollitia ullam obcaecati quasi, quidem nesciunt quis quae, necessitatibus ratione dolorum
                            dignissimos aperiam accusamus amet velit magnam tenetur optio laudantium, quo expedita. Quae
                            fugiat, modi quam rem pariatur excepturi iusto molestias facere soluta. Sequi praesentium
                            nobis molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla vel nostrum
                            maiores iste ab, accusamus numquam labore laudantium sint sequi cumque id dignissimos harum
                            fugiat placeat voluptates quisquam tempore, aliquam quia quae qui! Ipsam, dolores! Obcaecati
                            dolores molestiae dolorem. Pariatur corporis, sapiente sint iure dolorem quaerat praesentium
                            deleniti nulla maiores!
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-wrapper mt-5">
                <div class="w-100">

                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        <div class="image-list pt-4">
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
