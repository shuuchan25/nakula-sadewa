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
                    <form action="/admin/users" method="POST" class="" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
                            <img src="{{ asset('assets/pict/pp1.png') }}" alt="Pp1" class="rounded-circle" style="width: 250px">
                            <input type="file" name="image" id="image"
                                class="@error('image') is-invalid @enderror w-25 mt-4" value="{{ old('image') }}"
                                 onchange="previewImage()">
                            <div id="image-preview">
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between">
                            <div class="w-100">
                                <label for="">Nama</label>
                                <div class="w-100">
                                    <input type="text" name="name" id="name"
                                        class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required
                                        placeholder="Nama">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-100">
                                <label for="">Username</label>
                                <div class="w-100">
                                    <input type="text" name="username" id="username"
                                        class="@error('username') is-invalid @enderror" value="{{ old('username') }}" required
                                        placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="select-box w-100 pt-3 pt-md-0">
                                <label for="roles">Roles</label>
                                <select name="role_id" id="roles-select">
                                    <option value="">Roles</option>
                                        @foreach ($roles as $role)
                                            @if (old('role_id') == $role->id)
                                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                            @else
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>
                            <div class="w-100 ">
                                <label for="">Email</label>
                                <div class="w-100">
                                    <input type="email" name="email" id="email"
                                        class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required
                                        placeholder="nakulasadewa@gmail.com">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-flex w-100 gap-3 align-items-center justify-content-between pt-3">
                            <div class="w-50 pt-3 pt-md-0">
                                <label for="">Password</label>
                                <div class="w-100">
                                    <input type="text" name="password" id="password"
                                        class="@error('password') is-invalid @enderror" value="{{ old('password') }}" required
                                        placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/users'">Batal</button>
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
                            img.classList.add('rounded-circle');
                            img.style.width = '250px';
                            img.style.height = '250px';
                            img.style.position = 'absolute';
                            img.style.objectFit = 'cover';
                            img.style.zIndex = '1';
                            img.style.marginTop = '-332px';
                            img.style.marginLeft = '-125px';
                            preview.appendChild(img);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            }
        </script>
    </section>
@endsection

