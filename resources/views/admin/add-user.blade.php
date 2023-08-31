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
                    <form action="" class="">

                            <div class="w-100">
                                <label for="">Name</label>
                                <div class="w-100">
                                    <input type="text" class="" placeholder="">
                                </div>
                            </div>
                            <div class="select-box w-100 pt-3">
                                <label for="roles">Roles</label>
                                <select name="roles" id="roles-select">
                                    <option value="">Roles</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin penginapan">Admin Penginapan</option>
                                    <option value="admin destinasi wisata">Admin Destinasi Wisata</option>
                                </select>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Email</label>
                                <div class="">
                                    <input type="email" class="email" placeholder="Ex: Inagatahub@gmail.com" required>
                                    <p class="input-warning email-error"></p>
                                    {{-- 'warning' class is for invalid input --}}
                                </div>
                            </div>
                            <div class="w-100 pt-3">
                                <label for="">Password</label>
                                <div class="name-input">
                                    <input type="password" class="" placeholder="Masukkan password baru" required>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer w-100">
                    <button type="button" class="btn cancel-btn mb-0" onclick="location.href='user-management'">Batal</button>
                    <button type="button" class="btn save-btn mb-0 me-0">Simpan</button>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

