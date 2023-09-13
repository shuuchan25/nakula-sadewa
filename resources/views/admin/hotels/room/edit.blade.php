@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Kamar</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/hotels/room/{{ $hotel->slug }}/{{ $hotelRoom->slug }}" method="POST" class="" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="pt-3">
                            <div class="header d-flex align-items-center justify-content-between pb-lg-3 pb-2">
                                <h3>Kamar</h3>
                            </div>

                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Nama Kamar</label>
                                    <div class="w-100">
                                        <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name', $hotelRoom->name) }}" required placeholder="Nama Kamar">
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
                                        <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" value="{{ old('slug', $hotelRoom->slug ) }}" required placeholder="Slug Kamar">
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                                <div class="w-100">
                                    <label for="">Harga Kamar</label>
                                    <div class="w-100">
                                        <input type="number" name="price" id="price" class="@error('price') is-invalid @enderror" value="{{ old('price', $hotelRoom->price) }}" required placeholder="Masukkan harga">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-100">
                                    <label for="">Kapasitas</label>
                                    <div class="w-100">
                                        <input type="number" name="capacity" id="capacity" class="@error('capacity') is-invalid @enderror" value="{{ old('capacity', $hotelRoom->capacity) }}" required placeholder="Masukkan Kapasitas">
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
                                        <input type="file" name="image[]" id="image" class="is-invalid @if($errors->has('image.*') || $errors->has('image')) is-invalid @endif" value="{{ old('image') }}" multiple onchange="previewImages()">
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
                                <input type="hidden" name="description" id="description" value="{{ old('description', $hotelRoom->description) }}">
                                @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                @enderror
                                <trix-editor input="description"></trix-editor>
                            </div>
                        </div>

                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/hotels/{{ $hotel->slug }}'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>

                <div class="w-100 pt-3 border-top">
                    @if (session('success'))
                        <div id="alert-success" class="alert alert-success w-100">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div id="alert-danger" class="alert alert-danger w-100">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        @if ((is_array($roomImages) || is_object($roomImages)) && count($roomImages) > 0)
                            <div class="image-list pt-3 w-100 d-flex gap-2">
                                @foreach ($roomImages as $roomImage)
                                <div class="image-item">
                                    <div class="image-card">
                                        <img src="{{ asset('storage/' . $roomImage->image) }}" alt="">
                                    </div>
                                    <form action="/admin/hotels/room-images/{{ $hotel->slug }}/{{ $roomImage->id }}"
                                        method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-item">
                                            <svg width="20" height="20" viewBox="0 0 30 30" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                         @else
                        <p>Tidak ada gambar yang tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script>
            const name = document.querySelector('#name');
            const slug = document.querySelector('#slug');

            name.addEventListener('change', function() {
                fetch('/admin/hotels/room/checkSlug?name=' + name.value)
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
