@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Desa Wisata</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" class="" placeholder="Nama Desa Wisata">
                                </div>
                            </div>
                            <div class="select-box w-100">
                                <label for="kategori">Kategori</label>
                                <div class="select-box">
                                    <select name="kategori" id="kategori-select">
                                        <option value="">Kategori Wisata</option>
                                        <option value="wisata bahari">Wisata Bahari</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Jam Operasional</label>
                                <div class="w-100">
                                    <input type="text" name="operational_hour" class="" placeholder="Contoh 08.00 - 17.00">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Alamat</label>
                                <div class="w-100">
                                    <input type="text" name="address" class="" placeholder="Masukkan alamat">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Link Map</label>
                                <div class="w-100">
                                    <input type="text" name="map" class="" placeholder="Masukkan link google map">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Kontak</label>
                                <div class="w-100">
                                    <input type="text" name="contact" class="" placeholder="Masukkan nomor telepon">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Video</label>
                                <div class="w-100">
                                    <input type="text" name="video" class="" placeholder="Masukkan link youtube video profil">
                                </div>
                            </div>
                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Gambar Utama (Max. 1 file)</label>
                                    <div class="w-100">
                                        <input type="file" name="files[]" multiple>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <label for="">Gambar Galeri (Max. 6 File)</label>
                                    <div class="w-100">
                                        <input type="file" name="files[]" multiple>
                                    </div>
                                </div>
                        </div>
                        </div>
                            <div class="w-100 pt-3">
                                <label for="">Deskripsi</label>
                                <div class="w-100">
                                    <textarea name="description" id=""></textarea>
                                </div>
                            </div>

                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='desa-wisata'">Batal</button>
                                <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                            </div>

                    </form>
                </div>

            </div>
            </div>
        </div>
    </section>
@endsection

