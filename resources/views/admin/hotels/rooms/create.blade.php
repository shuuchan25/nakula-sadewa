@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Kamar</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/hotels/{{ $hotel->slug }}/rooms" method="POST" class=""
                        enctype="multipart/form-data">
                        @csrf
                        <div class="pt-3">
                            <div class="header d-flex align-items-center justify-content-between pb-2">
                                <h3>Kamar</h3>
                            </div>

                            <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Nama Kamar</label>
                                    <div class="w-100">
                                        <input type="text" name="name" id="name"
                                            class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required
                                            placeholder="Nama Kamar">
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
                                            placeholder="Slug Kamar">
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
                                    <label for="">Harga Kamar</label>
                                    <div class="w-100">
                                        <input type="number" name="price" id="price"
                                            class="@error('price') is-invalid @enderror" value="{{ old('price') }}"
                                            required placeholder="Masukkan harga">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-100 pt-3 pt-md-0">
                                    <label for="">Kapasitas</label>
                                    <div class="w-100">
                                        <input type="number" name="capacity" id="capacity"
                                            class="@error('capacity') is-invalid @enderror" value="{{ old('capacity') }}"
                                            required placeholder="Masukkan Kapasitas">
                                        @error('capacity')
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
                                        <input type="file" name="image[]" id="image"
                                            class="is-invalid @if ($errors->has('image.*') || $errors->has('image')) is-invalid @endif"
                                            value="{{ old('image') }}" required multiple onchange="previewImages()">
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
                                    <div id="image-previews" class="image-list w-100 pt-2">
                                    </div>
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
                            <div style="font-size: 11px; color: var(--gray-3);" id="character-indicator"></div>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/hotels/{{ $hotel->slug }}'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <script>
            document.addEventListener('trix-change', function(event) {
                var editor = event.target.editor;
                var characterCount = editor.getDocument().toString().length;
                var maxCharacters = 200; // Ganti dengan jumlah karakter maksimum yang diinginkan

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
                fetch('/admin/hotels/rooms/checkSlug?name=' + name.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });

            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })

            function previewImages() {
                var input = document.getElementById('image');
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
