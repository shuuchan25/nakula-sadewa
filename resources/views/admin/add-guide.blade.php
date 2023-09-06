@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Tambah Travel Pattern</h3>
                </div>
            </div>
            <div class="content-wrapper">

                <div class="modal-body add-form">
                    <form action="{{ route('guide.store') }}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-block d-md-flex align-items-center justify-content-between gap-3 w-100">
                            <div class="w-100 pt-md-0">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" class="" placeholder="Judul Artikel" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3 pt-md-0">
                                <label for="image">Unggah Gambar</label>
                                <input type="file" name="image" accept="image/*" id="" class="file-input">
                                {{-- <p class="input-warning"></p> --}}
                            </div>
                        </div>

                            <div class="w-100 pt-3">
                                <label for="description">Deskripsi</label>
                                <div class="">
                                    <textarea name="description" id="" cols="30" rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="modal-footer w-100">
                                <button type="button" class="btn cancel-btn mb-0" onclick="location.href='{{ route('guide.index') }}'">Batal</button>
                                <button type="submit" class="btn save-btn mb-0 me-0">Simpan</button>
                            </div>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </section>
@endsection

