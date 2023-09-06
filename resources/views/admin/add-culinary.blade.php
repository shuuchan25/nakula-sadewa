@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Wisata Kuliner</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" class="" placeholder="Nama Wisata Kuliner">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Jam Operasional</label>
                                <div class="w-100">
                                    <input type="text" name="name" class="" placeholder="Contoh 09.00 - 22.00">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Alamat</label>
                                <div class="w-100">
                                    <input type="text" name="address" class="" placeholder="Masukkan alamat">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Kontak</label>
                                <div class="w-100">
                                    <input type="text" name="contact" class=""
                                        placeholder="Masukkan nomor telepon">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <div class="w-100">
                                    <label for="">Gambar Utama (Max. 1 file)</label>
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


                        <div id="menu-list">
                            <!-- Data Menu Hotel akan ditampilkan di sini -->
                        </div>

                        <div class="d-flex justify-content-center w-100 py-3 ">
                            <button type="button" class="primary-button" onclick="addMenu()">Tambah Menu</button>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='culinary'">Batal</button>
                            <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script-body')
<script>
    let menuCount = 1; // Counter untuk mengidentifikasi menu ke berapa

    function addMenu() {
        const menuList = document.getElementById('menu-list');

        // Buat elemen field untuk input data menu
        const menuContainer = document.createElement('div');
        menuContainer.classList.add('menu-container');
        menuContainer.innerHTML = `
        <div class="pt-5">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                                    <h3>Menu ${menuCount}</h3>
                                    <div class="">
                                        <button type="button" class="delete-btn" onclick="location.href=''">Hapus Menu</button>
                                    </div>
                                </div>
                <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                <div class="w-100">
                    <label for="menu-type${menuCount}">Nama Menu</label>
                    <input type="text" id="menu-type${menuCount}" name="menu-type${menuCount}">
                </div>
                <div class="select-box w-100">
                                <label for="kategori">Kategori</label>
                                <div class="select-box">
                                    <select name="kategori" id="kategori-select">
                                        <option value="">Kategori Menu</option>
                                        <option value="wisata bahari">Makanan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                <div class="w-100">
                    <label for="menu-price${menuCount}">Harga Menu</label>
                    <input type="text" id="menu-price${menuCount}" name="menu-price${menuCount}">
                </div>
                <div class="w-100">
                    <label for="menu-image${menuCount}">Gambar Menu</label>
                    <input type="file" name="menu-image${menuCount}" multiple>
                </div>
            </div>
            <div class="w-100 pt-3">
                    <label for="menu-desc${menuCount}">Deskripsi Menu</label>
                    <div class="w-100">
                        <textarea name="description" id="menu-desc${menuCount}"></textarea>
                    </div>
            </div>
        </div>
        `;

        menuList.appendChild(menuContainer);
        menuCount++; // Tingkatkan counter setiap kali menambahkan menu
    }
</script>
@endsection
