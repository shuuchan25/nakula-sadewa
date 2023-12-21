@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Barang</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/shops/{{ $shop->slug }}/gifts" method="POST" class=""
                        enctype="multipart/form-data">
                        @csrf
                        <div id="menu-list">
                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama Barang</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required
                                        placeholder="Nama Barang">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" value="{{ old('slug') }}" required
                                        placeholder="Slug Barang">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Harga</label>
                                <div class="w-100">
                                    <input type="number" name="price" id="price"
                                        class="@error('price') is-invalid @enderror" value="{{ old('price') }}" required
                                        placeholder="Masukkan harga">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="select-box w-100 pt-3 pt-md-0">
                                <label for="kategori">Kategori</label>
                                <div class="select-box">
                                    <select name="menu_category_id">
                                        <option value="">Kategori Barang</option>
                                        @foreach ($menuCategories as $menuCategory)
                                            @if (old('menu_category_id') == $menuCategory->id)
                                                <option value="{{ $menuCategory->id }}" selected>{{ $menuCategory->name }}</option>
                                            @else
                                                <option value="{{ $menuCategory->id }}">{{ $menuCategory->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="image">Gambar Utama (Max. 1 file & 5MB)</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image"
                                        class="@error('image') is-invalid @enderror" value="{{ old('image') }}" required
                                        onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="image-preview" class="w-100 pt-2">
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
                            <div style="font-size: 11px; color: var(--gray-3);" id="character-indicator"></div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/shops/{{ $shop->slug }}'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('trix-change', function(event) {
                var editor = event.target.editor;
                var characterCount = editor.getDocument().toString().length;
                var maxCharacters = 35; // Ganti dengan jumlah karakter maksimum yang diinginkan

                if (characterCount > maxCharacters) {
                    var overLimit = characterCount - maxCharacters;
                    var content = editor.getDocument().toString();
                    var truncatedContent = content.substring(0, content.length - overLimit);
                    editor.loadHTML(truncatedContent);

                    var inputElement = editor.element;
                    inputElement.blur(); // Melepaskan fokus dari editor untuk mencegah pengguna mengetik lebih lanjut
                }

                var indicator = document.getElementById('character-indicator');
                indicator.innerHTML = characterCount + ' dari ' + maxCharacters + ' karakter';

                if (characterCount >= maxCharacters) {
                    var inputElement = editor.element;
                    inputElement.blur(); // Melepaskan fokus dari editor untuk mencegah pengguna mengetik lebih lanjut
                    indicator.style.color = 'red';
                } else {
                    editor.setAttribute('contenteditable', 'true'); // Mengaktifkan editing kembali jika di bawah batas
                    indicator.style.color = 'inherit';
                }
            });

            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function() {
                fetch('/admin/shops/gifts/checkSlug?name=' + name.value)
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
        </script>

    </section>
@endsection
