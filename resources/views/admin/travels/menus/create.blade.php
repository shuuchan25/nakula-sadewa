@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Paket Wisata</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/travels/{{ $travel->slug }}/menus" method="POST" class=""
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name" class=""
                                        placeholder="Nama Paket">
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" value="{{ old('slug') }}" required
                                        placeholder="Slug Paket">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-start justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Harga</label>
                                <div class="w-100">
                                    <input type="number" name="price" class="" placeholder="Harga paket">
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="image">Gambar Utama (Max. 1 file & 5MB)</label>
                                {{-- <img class="img-preview img-fluid d-block mb-3"> --}}
                                <div class="w-100">
                                    <input type="file" name="image" id="image"
                                        class="@error('image') is-invalid @enderror" value="" required
                                        onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Gambar(Max. 6 file & 10MB)</label>
                                <div class="w-100">
                                    <input type="file" name="other_image[]" id="other_image"
                                        class="is-invalid @if ($errors->has('image.*') || $errors->has('image')) is-invalid @endif"
                                        value="{{ old('image') }}" multiple onchange="previewImages()">
                                    @error('image.*')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-start justify-content-start">
                            <div id="image-preview" class="image-list pt-2">
                            </div>
                            <div id="image-previews" class="image-list pt-2">
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="description">Deskripsi</label>
                            <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/travels/{{ $travel->slug }}'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                const name = document.querySelector('#name');
                const slug = document.querySelector('#slug');

                name.addEventListener('change', function() {
                    fetch('/admin/travels/menus/checkSlug?name=' + name.value)
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

                            reader.readAsDataURL(input.files[0]);
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
