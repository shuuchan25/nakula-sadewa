@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Artikel</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/articles" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" placeholder="Judul Artikel" value="{{ old('title') }}" required>
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
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" placeholder="Slug Artikel" value="{{ old('slug') }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100 pt-3">
                            <div class="w-100">
                                <label for="published_at">Tanggal</label>
                                <div class="w-100">
                                    <input type="text" name="published_at" id="published_at" class="@error('published_at') is-invalid @enderror" placeholder="dd/mm/yyyy" value="{{ old('published_at') }}" required>
                                    @error('published_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" name="author" id="author" class="@error('author') is-invalid @enderror" placeholder="nama penulis" value="{{ old('author') }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <div class="w-25">
                                <label for="">Unggah Gambar</label>
                                <input type="file" name="image" id="image" class="file-input @error('image') is-invalid @enderror" accept="image" id="" class="" value="{{ old('image') }}" required onchange="previewImage()">
                                @error('image')
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
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/articles'">Batal</button>
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
                fetch('/admin/articles/checkSlug?title=' + title.value)
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
