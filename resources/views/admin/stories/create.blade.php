@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Cerita</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/stories" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" placeholder="Judul Cerita" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" placeholder="Slug Cerita" value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="w-100 pt-3">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" name="author" id="author" class="@error('author') is-invalid @enderror" placeholder="Nama Penulis" value="{{ old('author') }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="content">Konten</label>
                                <input type="hidden" name="content" id="content" value="{{ old('content') }}">
                                <trix-editor input="content"></trix-editor>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Unggah Gambar</label>
                                <img class="img-preview img-fluid d-block mb-3 col-sm-5">
                                <input type="file" name="image" accept="image/*" id="image" class="file-input @error('image') is-invalid @enderror" value="{{ old('image') }}" required onchange="previewImage()">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="input-warning"></p>
                            </div>
                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/stories'">Batal</button>
                                <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('change', function() {
                fetch('/admin/stories/checkSlug?title=' + title.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })

            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                const blob = URL.createObjectURL(image.files[0]);
                imgPreview.src = blob;
            }
        </script>
    </section>
@endsection

