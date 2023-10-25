@extends('admin.partials.master')

@section('content')
    <section class="page-section">
    @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Marker</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/maps/{{ $map->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="name">Nama Tempat</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" placeholder="Nama Leaflet"
                                        value="{{ old('name', $map->name ) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" placeholder="Slug "
                                        value="{{ old('slug', $map->slug ) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="select-box w-100">
                                <label for="kategori">Kategori Tempat</label>
                                <div class="select-box">
                                    <select name="category_id">
                                        @foreach ($categories as $category)
                                        @if(old('category_id', $map->category_id ) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100 pt-3">
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="coordinate_x">Latitude</label>
                                <div class="">
                                    <input type="text" name="coordinate_x" id="coordinate_x"
                                        class="@error('coordinate_x') is-invalid @enderror" placeholder="Koordinat Lokasi"
                                        value="{{ old('coordinate_x', $map->coordinate_x ) }}" required>
                                    @error('coordinate_x')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-md-0 pt-3">
                                <label for="coordinate_y">Longtitude</label>
                                <div class="">
                                    <input type="text" name="coordinate_y" id="coordinate_y"
                                        class="@error('coordinate_y') is-invalid @enderror" placeholder="Koordinat Lokasi"
                                        value="{{ old('coordinate_y', $map->coordinate_y ) }}" required>
                                    @error('coordinate_y')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/maps'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
            </div>

            <script>
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


