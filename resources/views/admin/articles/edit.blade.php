@extends('admin.partials.master')

@section('content')
    <section class="page-section">
    @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit Artikel</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="/admin/articles/{{ $article->slug }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror" placeholder="Judul Artikel" value="{{ old('title', $article->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug" class="@error('slug') is-invalid @enderror" placeholder="Slug Artikel" value="{{ old('slug', $article->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="published_at">Tanggal</label>
                                <div class="w-100">
                                    <input type="text" name="published_at" id="published_at" class="@error('published_at') is-invalid @enderror" placeholder="dd/mm/yyyy" value="{{ old('published_at', $article->published_at) }}" required>
                                    @error('published_at')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100 pt-3">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" name="author" id="author" class="@error('author') is-invalid @enderror" placeholder="nama penulis" value="{{ old('author', $article->author) }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Unggah Gambar</label>
                                <input type="file" name="image" id="image" class="file-input @error('image') is-invalid @enderror" accept="image" id="" class="" value="{{ old('image', $article->image) }}">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- <p class="input-warning"></p> --}}
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="content">Konten</label>
                            <input type="hidden" name="content" id="content" value="{{ old('content', $article->content) }}">
                            <trix-editor input="content"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/articles'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
@endsection


