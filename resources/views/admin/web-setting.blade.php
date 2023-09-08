@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Pengaturan Website</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Slogan</label>
                                <div class="w-100">
                                    <input type="text" class="" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="w-100 pt-3">
                            <label for="">Link Video Profile</label>
                            <div class="">
                                <input type="text" class="" placeholder="" required>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="">Tentang</label>
                            <div class="name-input">
                                <textarea name="about" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='user-management'">Batal</button>
                            <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2 pt-5">
                <div class="">
                    <h3 class="">Hero Images</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form pb-3">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Gambar Galeri (Max. 6 File)</label>
                                <div class="w-100">
                                    <input type="file" name="files[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='user-management'">Batal</button>
                            <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="w-100 pt-3 border-top">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2 pt-5">
                <div class="">
                    <h3 class="">Logo</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form pb-3">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Gambar Galeri (Max. 6 File)</label>
                                <div class="w-100">
                                    <input type="file" name="files[]" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='user-management'">Batal</button>
                            <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="w-100 pt-3 border-top">
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
