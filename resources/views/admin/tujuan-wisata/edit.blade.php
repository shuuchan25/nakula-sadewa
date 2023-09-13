@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Destinasi Wisata</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/tujuan-wisata/{{ $tujuanWisataItem->slug }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror"
                                        value="{{ old('name', $tujuanWisataItem->name) }}" required
                                        placeholder="Nama Destinasi Wisata">
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
                                        class="@error('slug') is-invalid @enderror"
                                        value="{{ old('slug', $tujuanWisataItem->slug) }}" required
                                        placeholder="Slug Destinasi Wisata">
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="select-box w-100">
                                <label for="kategori">Kategori Destinasi Wisata</label>
                                <div class="select-box">
                                    <select name="category_id">
                                        @foreach ($categories as $category)
                                            @if (old('category_id', $tujuanWisataItem->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Jam Operasional</label>
                                <div class="w-100">
                                    <input type="text" name="operational_hour" id="operational_hour"
                                        class="@error('operational_hour') is-invalid @enderror"
                                        value="{{ old('operational_hour', $tujuanWisataItem->operational_hour) }}" required
                                        placeholder="Contoh 08.00 - 17.00">
                                    @error('operational_hour')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Alamat</label>
                                <div class="w-100">
                                    <input type="text" name="address" id="address"
                                        class="@error('address') is-invalid @enderror"
                                        value="{{ old('address', $tujuanWisataItem->address) }}" required
                                        placeholder="Masukkan alamat">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Kontak</label>
                                <div class="w-100">
                                    <input type="text" name="contact" id="contact"
                                        class="@error('contact') is-invalid @enderror"
                                        value="{{ old('contact', $tujuanWisataItem->contact) }}" required
                                        placeholder="Masukkan nomor telepon">
                                    @error('contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Harga</label>
                                <div class="w-100">
                                    <input type="number" name="price" id="price"
                                        class="@error('price') is-invalid @enderror"
                                        value="{{ old('price', $tujuanWisataItem->price) }}" required
                                        placeholder="Masukkan harga">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Video</label>
                                <div class="w-100">
                                    <input type="text" name="video" id="video"
                                        class="@error('video') is-invalid @enderror"
                                        value="{{ old('video', $tujuanWisataItem->video) }}"
                                        placeholder="Masukkan link youtube video profil">
                                    @error('video')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Link Map</label>
                                <div class="w-100">
                                    <input type="text" name="map" id="map"
                                        class="@error('map') is-invalid @enderror"
                                        value="{{ old('map', $tujuanWisataItem->map) }}" required
                                        placeholder="Masukkan link google map">
                                    @error('map')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Koordinat X</label>
                                <div class="w-100">
                                    <input type="text" name="coordinate_x" id="coordinate_x"
                                        class="@error('coordinate_x') is-invalid @enderror"
                                        value="{{ old('coordinate_x', $tujuanWisataItem->coordinate_x) }}" required
                                        placeholder="Masukkan koordinat (Latitude)">
                                    @error('coordinate_x')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="">Koordinat Y</label>
                                <div class="w-100">
                                    <input type="text" name="coordinate_y" id="coordinate_y"
                                        class="@error('coordinate_y') is-invalid @enderror"
                                        value="{{ old('coordinate_y', $tujuanWisataItem->coordinate_y) }}" required
                                        placeholder="Masukkan koordinat (Longitude)">
                                    @error('coordinate_y')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-100">
                                <label for="">Gambar Utama (Max. 1 file & 5MB)</label>
                                <div class="w-100">
                                    <input type="file" name="image" id="image"
                                        class="@error('image') is-invalid @enderror"
                                        value="{{ old('image', $tujuanWisataItem->image) }}" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div id="image-preview" class="image-list w-100 pt-2">
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3 pt-md-0">
                            <label for="description">Deskripsi</label>
                            <input type="hidden" name="description" id="description"
                                value="{{ old('description', $tujuanWisataItem->description) }}">
                            @error('other_image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <trix-editor input="description"></trix-editor>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/tujuan-wisata'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="w-100 pt-2 border-top mt-3">
                    <div class="modal-body add-form pb-3">
                        @if (session('success'))
                            <div id="alert-success" class="alert alert-success w-100 m-0">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div id="alert-danger" class="alert alert-danger w-100 m-0">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="/admin/tujuan-wisata-images/{{ $tujuanWisataItem->id }}" method="POST"
                            class="" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div id="image-previews" class="image-list w-100 pt-2">
                                </div>
                                <div class="pt-2">
                                    <label for="">Gambar Galeri (Max. 6 File)</label>
                                    <div class="d-md-flex w-100 align-items-center justify-content-between gap-3">
                                        <div class="w-100">
                                            <input type="file" name="other_image[]" id="other_image"
                                                class="file-input" onchange="previewImages()" multiple>
                                        </div>
                                        <div class="modal-footer m-0 pt-3 pt-md-0">
                                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pt-3">
                        <h5>
                            List Gambar
                        </h5>
                        @if (isset($tujuanWisataItem->image) ||
                                (isset($other_images) && (is_array($other_images) || is_object($other_images)) && count($other_images)) > 0)
                            <div class="pt-3 w-100 d-md-flex gap-2">
                                <div class="image-list pe-4 me-3 border-md-end">
                                    <div class="image-item ">
                                        <div class="image-card mb-1">
                                            <img src="{{ asset('storage/' . $tujuanWisataItem->image) }}" alt="">
                                        </div>
                                        Gambar Utama
                                    </div>
                                </div>
                                <div class="image-list pt-3 pt-md-0">
                                    @foreach ($other_images as $other_image)

                                            <div class="image-item">
                                                <div class="image-card">
                                                    <img src="{{ asset('storage/' . $other_image->other_image) }}"
                                                        alt="">
                                                </div>
                                                <form
                                                    action="{{ route('admin.tujuanwisataimages.destroy', $other_image->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-item">
                                                        <svg width="20" height="20" viewBox="0 0 30 30"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M23.8615 11.064C24.3571 11.1048 24.7267 11.538 24.6871 12.0336C24.6799 12.1152 24.0295 20.1684 23.6551 23.5464C23.4223 25.6428 22.0375 26.9184 19.9471 26.9568C18.3475 26.9844 16.8043 27 15.2959 27C13.6699 27 12.0847 26.982 10.5163 26.9496C8.50987 26.91 7.12147 25.6092 6.89467 23.5548C6.51667 20.1468 5.86987 12.114 5.86387 12.0336C5.82307 11.538 6.19267 11.1036 6.68827 11.064C7.17667 11.0508 7.61827 11.394 7.65787 11.8884C7.6617 11.9405 7.92612 15.2208 8.21427 18.4665L8.27214 19.1142C8.41727 20.7274 8.56438 22.2776 8.68387 23.3568C8.81227 24.5244 9.44227 25.1268 10.5535 25.1496C13.5535 25.2132 16.6147 25.2168 19.9147 25.1568C21.0955 25.134 21.7339 24.5436 21.8659 23.3484C22.2379 19.9956 22.8859 11.97 22.8931 11.8884C22.9327 11.394 23.3707 11.0484 23.8615 11.064ZM17.8144 3.00037C18.916 3.00037 19.8844 3.74317 20.1688 4.80757L20.4736 6.32077C20.5721 6.81682 21.0074 7.17908 21.5115 7.18703L25.4496 7.18717C25.9464 7.18717 26.3496 7.59037 26.3496 8.08717C26.3496 8.58397 25.9464 8.98717 25.4496 8.98717L21.5467 8.98699C21.5406 8.98711 21.5345 8.98717 21.5284 8.98717L21.4992 8.98597L9.04989 8.98702C9.04022 8.98712 9.03053 8.98717 9.02083 8.98717L9.00235 8.98597L5.09995 8.98717C4.60315 8.98717 4.19995 8.58397 4.19995 8.08717C4.19995 7.59037 4.60315 7.18717 5.09995 7.18717L9.03715 7.18597L9.15838 7.17829C9.60992 7.11971 9.98519 6.77677 10.0768 6.32077L10.3684 4.86157C10.6648 3.74317 11.6332 3.00037 12.7348 3.00037H17.8144ZM17.8144 4.80037H12.7348C12.4468 4.80037 12.1936 4.99357 12.1204 5.27077L11.8408 6.67477C11.8053 6.8526 11.7536 7.02398 11.6873 7.18749H18.8623C18.796 7.02398 18.7441 6.8526 18.7084 6.67477L18.4168 5.21557C18.3556 4.99357 18.1024 4.80037 17.8144 4.80037Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>

                                    @endforeach
                                </div>
                            </div>
                        @else
                            <p>Tidak ada gambar yang tersedia.</p>
                        @endif
                    </div>
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
