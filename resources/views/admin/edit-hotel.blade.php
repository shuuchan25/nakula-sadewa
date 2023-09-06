@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Penginapan</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" class="" value="Nama Penginapan">
                                </div>
                            </div>
                            <div class="select-box w-100">
                                <label for="kategori">Kategori</label>
                                <div class="select-box">
                                    <select name="kategori" id="kategori-select">
                                        <option value="">Kategori Penginapan</option>
                                        <option value="wisata bahari">Hotel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Alamat</label>
                                <div class="w-100">
                                    <input type="text" name="address" class="" value="Masukkan alamat">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Kontak</label>
                                <div class="w-100">
                                    <input type="text" name="contact" class="" value="Masukkan nomor telepon">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Link Map</label>
                                <div class="w-100">
                                    <input type="text" name="map" class="" value="Masukkan link google map">
                                </div>
                            </div>
                            <div class="w-100">
                                <div class="w-100">
                                    <label for="">Gambar Utama (Max. 1 file)</label>
                                    <div class="w-100">
                                        <input type="file" name="files[]" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Gambar Galeri (Max. 6 File)</label>
                                <div class="w-100">
                                    <input type="file" name="files[]" multiple>
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Fasilitas</label>
                                <div
                                    class="facilities-checkbox d-flex w-100 gap-4 align-items-center justify-content-start ">
                                    <div class="">
                                        <div class="pb-1">
                                            <input type="checkbox" name="parkir" id="">
                                            <label for="parkir" class="mb-0">Parkir</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" name="kolam renang" id="">
                                            <label for="kolam renang" class="mb-0">Kolam Renang</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="pb-1">
                                            <input type="checkbox" name="parkir" id="">
                                            <label for="parkir" class="mb-0">Parkir</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" name="Restoran" id="">
                                            <label for="Restoran" class="mb-0">Restoran</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="pb-1">
                                            <input type="checkbox" name="parkir" id="">
                                            <label for="parkir" class="mb-0">Parkir</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" name="Restoran" id="">
                                            <label for="Restoran" class="mb-0">Restoran</label>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="pb-1">
                                            <input type="checkbox" name="parkir" id="">
                                            <label for="parkir" class="mb-0">Parkir</label>
                                        </div>
                                        <div class="">
                                            <input type="checkbox" name="Restoran" id="">
                                            <label for="Restoran" class="mb-0">Restoran</label>
                                        </div>
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


                        <div id="room-list">
                            <div class="pt-4">
                                <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                                    <h3>Kamar</h3>
                                    <div class="">
                                        <button type="button" class="delete-btn" onclick="location.href=''">Hapus
                                            Kamar</button>
                                    </div>
                                </div>
                                <div class="w-100">
                                    <label for="room-type">Nama Kamar</label>
                                    <input type="text" id="room-type" name="room-type">
                                </div>
                                <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                    <div class="w-100">
                                        <label for="room-price">Harga Kamar</label>
                                        <input type="text" id="room-price" name="room-price">
                                    </div>
                                    <div class="w-100">
                                        <label for="room-image">Gambar Kamar</label>
                                        <input type="file" name="room-image" multiple>
                                    </div>
                                </div>
                                <div class="w-100 pt-3">
                                    <label for="room-desc">Deskripsi Kamar</label>
                                    <div class="w-100">
                                        <textarea name="description" id="room-desc"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center w-100 py-3 ">
                            <button type="button" class="primary-button" onclick="addRoom()">Tambah Kamar</button>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='hotel'">Batal</button>
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
        let roomCount = 1; // Counter untuk mengidentifikasi kamar ke berapa

        function addRoom() {
            const roomList = document.getElementById('room-list');

            // Buat elemen field untuk input data kamar
            const roomContainer = document.createElement('div');
            roomContainer.classList.add('room-container');
            roomContainer.innerHTML = `
        <div class="pt-3">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                                    <h3>Kamar ${roomCount}</h3>
                                    <div class="">
                                        <button type="button" class="delete-btn" onclick="location.href=''">Hapus Kamar</button>
                                    </div>
                                </div>
            <div class="w-100">
                    <label for="room-type${roomCount}">Nama Kamar</label>
                    <input type="text" id="room-type${roomCount}" name="room-type${roomCount}">
                </div>
            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                <div class="w-100">
                    <label for="room-price${roomCount}">Harga Kamar</label>
                    <input type="text" id="room-price${roomCount}" name="room-price${roomCount}">
                </div>
                <div class="w-100">
                    <label for="room-image${roomCount}">Gambar Kamar</label>
                    <input type="file" name="room-image${roomCount}" multiple>
                </div>
            </div>
            <div class="w-100 pt-3">
                    <label for="room-desc${roomCount}">Deskripsi Kamar</label>
                    <div class="w-100">
                        <textarea name="description" id="room-desc${roomCount}"></textarea>
                    </div>
            </div>
        </div>
        `;

            roomList.appendChild(roomContainer);
            roomCount++; // Tingkatkan counter setiap kali menambahkan kamar
        }
    </script>
@endsection
