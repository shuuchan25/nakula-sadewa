@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Sub Kategori Atraksi</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/attraction-sub-categories/{{ $attractionSubCategory->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="name">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" placeholder="Nama Kategori" value="{{ old('name', $attractionSubCategory->name ) }}" required>
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
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" placeholder="Slug Kategori" value="{{ old('slug', $attractionSubCategory->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="select-box w-50 mt-4">
                            <label for="kategori">Kategori Atraksi</label>
                            <div class="select-box">
                                <select name="category_id" id="categorySelect">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $attractionSubCategory->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/attraction-sub-categories'">Batal</button>
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
                fetch('/admin/attraction-sub-categories/checkSlug?name=' + name.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
            });
        </script>
    </section>
@endsection


