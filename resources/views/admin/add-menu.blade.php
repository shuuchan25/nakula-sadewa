@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Menu</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div id="menu-list">
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="menu-type">Nama Menu</label>
                                <input type="text" id="menu-type" name="menu-type">
                            </div>
                            <div class="w-100">
                                <label for="menu-type">Slug</label>
                                <input type="text" id="menu-type" name="menu-type">
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="menu-price">Harga Menu</label>
                                <input type="text" id="menu-price" name="menu-price">
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
                                <label for="">Gambar</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image" accept="image/*" class="file-input"
                                        onchange="previewImage()" required>
                                </div>
                            </div>
                        </div>
                        <div id="image-preview" class="w-100 pt-2">
                        </div>
                        <div class="w-100 pt-3">
                            <label for="menu-desc">Deskripsi Menu</label>
                            <div class="w-100">
                                <textarea name="description" id="menu-desc"></textarea>
                            </div>
                        </div>
                </div>

                <div class="modal-footer w-100">
                    <button type="button" class="btn cancel-btn mb-0"
                        onclick="location.href='detail-culinary'">Batal</button>
                    <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                </div>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })

            function previewImage() {
                var input = document.getElementById('image');
                var preview = document.getElementById('image-preview');

                preview.innerHTML = '';

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (var i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var img = document.createElement('img');
                            img.src = event.target.result;
                            img.classList.add('preview-image'); // Tambahkan kelas 'preview-image'
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        </script>

    </section>
@endsection
