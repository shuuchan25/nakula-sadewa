@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Destinasi Wisata</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/tujuan-wisata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Nama Destinasi Wisata">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" value="{{ old('slug') }}" required placeholder="Slug Destinasi Wisata">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="select-box w-100">
                                <label for="kategori">Kategori Destinasi Wisata</label>
                                <div class="select-box">
                                    <select name="category_id">
                                        @foreach ($categories as $category)
                                        @if(old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else 
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Jam Operasional</label>
                                <div class="w-100">
                                    <input type="text" name="operational_hour" id="operational_hour" class="@error('operational_hour') is-invalid @enderror" value="{{ old('operational_hour') }}" required placeholder="Contoh 08.00 - 17.00">
                                    @error('operational_hour')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Alamat</label>
                                <div class="w-100">
                                    <input type="text" name="address" id="address" class="@error('address') is-invalid @enderror" value="{{ old('address') }}" required placeholder="Masukkan alamat">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Harga</label>
                                <div class="w-100">
                                    <input type="number" name="price" id="price" class="@error('price') is-invalid @enderror" value="{{ old('price') }}" required placeholder="Masukkan harga">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Kontak</label>
                                <div class="w-100">
                                    <input type="text" name="contact" id="contact" class="@error('contact') is-invalid @enderror" value="{{ old('contact') }}" required placeholder="Masukkan nomor telepon">
                                    @error('contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Link Map</label>
                                <div class="w-100">
                                    <input type="text" name="map" id="map" class="@error('map') is-invalid @enderror" value="{{ old('map') }}" required placeholder="Masukkan link google map">
                                    @error('map')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Video</label>
                                <div class="w-100">
                                    <input type="text" name="video" id="video" class="@error('video') is-invalid @enderror" value="{{ old('video') }}" placeholder="Masukkan link youtube video profil">
                                    @error('video')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Gambar Utama (Max. 1 file)</label>
                                    <img class="img-preview img-fluid d-block mb-3 col-sm-5">
                                    <div class="w-100">
                                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror" value="{{ old('image') }}" required multiple onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-100">
                                    <label for="">Gambar Galeri (Max. 6 File)</label>
                                    <div class="w-100">
                                        <input type="file" name="other_image[]" id="other_image" class="@error('other_image') is-invalid @enderror" value="{{ old('other_image') }}" multiple>
                                        @error('other_image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="description">Deskripsi</label>
                            <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                            @error('other_image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                            @enderror
                            <trix-editor input="description"></trix-editor>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/tujuan-wisata'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function() {
                fetch('/admin/tujuan-wisata/checkSlug?name=' + name.value)
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

