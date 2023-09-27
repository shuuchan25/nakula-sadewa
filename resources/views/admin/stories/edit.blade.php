@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Cerita</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/stories/{{ $story->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title"
                                        class="@error('title') is-invalid @enderror" placeholder="Judul Cerita"
                                        value="{{ old('title', $story->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-3">
                            <div class="w-100">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" placeholder="Slug Cerita"
                                        value="{{ old('slug', $story->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" name="author" id="author"
                                        class="@error('author') is-invalid @enderror" placeholder="Nama Penulis"
                                        value="{{ old('author', $story->author) }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="">Unggah Gambar</label>
                            <input type="file" name="image" accept="image/*" id="image"
                                class="file-input @error('image') is-invalid @enderror"
                                value="{{ old('image', $story->image) }}" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div id="image-preview" class="w-100 pt-2">
                                <img src="{{ asset('storage/' . $story->image) }}" alt="" class="image-card">
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="content">Konten</label>
                            <input type="hidden" name="content" id="content"
                                value="{{ old('content', $story->content) }}">
                            <trix-editor input="content"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/stories'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
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
                            img.classList.add('image-card');
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }
            }
            </script>
    </section>
@endsection
