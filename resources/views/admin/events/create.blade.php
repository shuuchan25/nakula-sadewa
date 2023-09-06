@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Event</h3>
                </div>
            </div>
            <div class="content-wrapper">

                <div class="modal-body add-form">
                    <form action="/admin/events" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-block d-md-flex  align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" class="@error('title') is-invalid @enderror" placeholder="Judul Artikel" value="{{ old('title') }}" required>
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
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" placeholder="Slug Artikel" value="{{ old('slug') }}" required>
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
                                <label for="place">Tempat</label>
                                <div class="w-100">
                                    <input type="text" name="place" class="@error('place') is-invalid @enderror" placeholder="masukkan tempat" value="{{ old('place') }}"  required>
                                    @error('place')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="date">Tanggal</label>
                                <div class="w-100">
                                    <input type="text" name="date"class="@error('date') is-invalid @enderror" placeholder="dd/mm/yyyy" value="{{ old('date') }}" required>
                                    @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3 pt-md-3">
                            <label for="image">Unggah Gambar</label>
                            <input type="file" name="image" accept="image/*" id="image" class="file-input @error('image') is-invalid @enderror" value="{{ old('image') }}" required onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <img class="img-preview w-25 img-fluid d-block py-3 col-sm-5">
                        </div>

                            <div class="w-100 pt-3">
                                <label for="desc">Konten</label>
                                <input type="hidden" name="desc" id="desc" value="{{ old('desc') }}">
                            <trix-editor input="desc"></trix-editor>
                            </div>

                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/events'">Batal</button>
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
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                const blob = URL.createObjectURL(image.files[0]);
                imgPreview.src = blob;
            }
        </script>
    </section>
@endsection

