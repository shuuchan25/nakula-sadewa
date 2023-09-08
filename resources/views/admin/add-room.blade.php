@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Penginapan</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="" class="">
                        <div class="pt-3">
                            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                                <h3>Kamar</h3>
                            </div>

                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="room-type${roomCount}">Nama Kamar</label>
                                    <input type="text" id="room-type${roomCount}" name="room-type${roomCount}">
                                </div>
                                <div class="w-100">
                                    <label for="room-price${roomCount}">Harga Kamar</label>
                                    <input type="text" id="room-price${roomCount}" name="room-price${roomCount}">
                                </div>
                            </div>
                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Gambar</label>
                                    <div class="w-100">
                                        <input type="file" name="image[]" id="image" accept="image/*" class="file-input"
                                            onchange="previewImage()" multiple required>
                                    </div>
                                </div>
                            </div>
                            <div id="image-preview" class="w-100 pt-2">
                            </div>
                            <div class="w-100 pt-3">
                                <label for="room-desc${roomCount}">Deskripsi Kamar</label>
                                <input type="hidden" name="content" id="content" value="">
                                <trix-editor input="content"></trix-editor>
                            </div>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='detail-hotel'">Batal</button>
                            <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
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
