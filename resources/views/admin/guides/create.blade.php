@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Travel Pattern</h3>
                </div>
            </div>
            <div class="content-wrapper">

                <div class="modal-body add-form">
                    <form action="/admin/guides" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100 pt-md-0">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" class="" placeholder="Judul Artikel" required>
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
                        <div class="w-100 pt-3 ">
                            <label for="image">Unggah Gambar</label>
                            <input type="file" name="image" accept="image/*" id="" class="file-input">
                        </div>

                        <div class="w-100 pt-3">
                            <label for="description">Konten</label>
                            <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                            <trix-editor input="description"></trix-editor>
                        </div>

                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/guides'">Batal</button>
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
                fetch('/admin/guides/checkSlug?title=' + title.value)
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

