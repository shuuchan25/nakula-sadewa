@extends('admin.partials.master')

@section('content')
    <section class="page-section">
    @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah User</h3>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="modal-body add-form">
                    <form action="{{ route('article.update', $article) }}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" class="" value="{{ old('title', $article->title) }}" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" class="" name="author" value="{{ old('author', $article->author) }}" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="content">Konten</label>
                                <div class="">
                                    <textarea name="content" id="" cols="30" rows="10" required>{{ old('content', $article->content) }}</textarea>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Image Upload *min 360px (Max 5 mb)</label>
                                <input type="file" name="image" accept="image/*" id="" class="file-input" value="{{ old('image', $article->image) }}>
                                <p class="input-warning"></p>
                            </div>
                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='article'">Batal</button>
                                <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                            </div>
                    </form>
                </div>

            </div>
            </div>
        </section>
@endsection
