@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai {{ auth()->user()->name }},</p>
                    <h3 class="">Tambah Event</h3>
                </div>
            </div>
            <div class="content-wrapper">

                <div class="modal-body add-form">
                    <form action="/admin/events" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-block d-md-flex  align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Nama Event</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title"
                                        class="@error('title') is-invalid @enderror" placeholder="Nama event"
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="slug">Slug</label>
                                <div class="w-100 ">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" placeholder="Slug"
                                        value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-md-3">
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="price">HTM</label>
                                <div class="w-100">
                                    <input type="number" name="price" class="@error('price') is-invalid @enderror"
                                        placeholder="HTM event" value="{{ old('price') }}" required>
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="date">Tanggal</label>
                                <div class="w-100">
                                    <input type="date" name="date"class="@error('date') is-invalid @enderror"
                                        placeholder="dd/mm/yyyy" value="{{ old('date') }}" required>
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-md-3">
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="place">Tempat</label>
                                <div class="w-100">
                                    <input type="text" name="place" class="@error('place') is-invalid @enderror"
                                        placeholder="Lokasi event" value="{{ old('place') }}" required>
                                    @error('place')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="contact">Kontak (Nomor Whatsapp)</label>
                                <div class="w-100">
                                    <input type="text" name="contact" class="@error('contact') is-invalid @enderror"
                                        placeholder="Contoh : 823xxxxxxx" value="{{ old('contact') }}" required>
                                    @error('contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="map">Embed Map</label>
                            <div class="w-100">
                                <input type="text" name="map" class="@error('map') is-invalid @enderror"
                                    placeholder="Masukkan Link Map" value="{{ old('map') }}" required>
                                @error('map')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Gambar</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image" accept="image/*" class="file-input"
                                        onchange="previewImage()" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Gambar Galeri (Max. 6 File & 10MB)</label>
                                <div class="w-100">
                                    <input type="file" name="other_image[]" id="other_image"
                                        class="is-invalid @if ($errors->has('other_image.*') || $errors->has('other_image')) is-invalid @endif"
                                        value="{{ old('other_image') }}" multiple onchange="previewImages()">
                                    @error('other_image.*')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('other_image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-start justify-content-between">
                            <div id="image-preview" class="image-list w-100 pt-2">
                            </div>
                            <div id="image-previews" class="image-list w-100 pt-2">
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="desc">Konten</label>
                            <input type="hidden" name="desc" id="desc" value="{{ old('desc') }}">
                            <trix-editor input="desc"></trix-editor>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/events'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        </div>

        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/events/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

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
                            img.classList.add('image-card');
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }

            function previewImages() {
                var input = document.getElementById('other_image');
                var preview = document.getElementById('image-previews');

                preview.innerHTML = '';

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (var i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var card = document.createElement('div');
                            card.classList.add('image-card');

                            var img = document.createElement('img');
                            img.src = event.target.result;

                            card.appendChild(img);
                            preview.appendChild(card);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
        </script>
    </section>
@endsection
