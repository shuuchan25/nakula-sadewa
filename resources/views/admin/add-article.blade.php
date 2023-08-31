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
                    {{-- <div class="member-avatar">
                        <div class="avatar">
                            <img src="assets/img/user.png" alt="" id="profile-pic">
                        </div>
                        <div class="">
                            <div class="avatar-control">

                                <input type="file" style="display: none;" accept="image/jpeg, image/png, image/jpg"
                                    id="input-pic" />

                                <input type="button" class="upload-avatar primary-button" value="Upload Avatar"
                                    onclick="document.getElementById('input-pic').click();" />

                                <button type="button" class="delete-avatar-btn" id="delete-avatar-btn">Delete</button>
                            </div>
                            <label class="mb-0 pt-2 pt-md-3">Avatar help your teammates recognize you in Inagatahub</label>
                        </div>
                    </div> --}}
                    <form action="{{ route('article.store') }}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="w-100">
                                <label for="title">Judul</label>
                                <div class="w-100">
                                    <input type="text" name="title" class="" placeholder="" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="author">Penulis</label>
                                <div class="">
                                    <input type="text" class="" name="author" placeholder="" required>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="content">Konten</label>
                                <div class="">
                                    <textarea name="content" id="" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Image Upload *min 360px (Max 5 mb)</label>
                                <input type="file" name="image" accept="image/*" id="" class="file-input">
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
        </div>
    </section>
@endsection

