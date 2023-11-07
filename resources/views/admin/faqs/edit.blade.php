@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Edit FAQ</h3>
                </div>
            </div>
            <div class="content-wrapper">

                <div class="modal-body add-form">
                    <form action="/admin/faqs/{{ $faq->slug }}" class="" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100">
                                <label for="question">Pertanyaan</label>
                                <div class="w-100">
                                    <input type="text" name="question" class=""
                                        value="{{ old('question', $faq->slug) }}" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="slug">Slug</label>
                                <div class="w-100">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') is-invalid @enderror" placeholder="Slug Artikel"
                                        value="{{ old('slug', $faq->slug) }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-100 pt-3">
                            <label for="answer">Jawaban</label>
                            <input type="hidden" name="answer" id="answer" value="{{ old('answer', $faq->slug) }}">
                            <trix-editor input="answer"></trix-editor>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0"
                                onclick="location.href='/admin/faqs'">Batal</button>
                            <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
