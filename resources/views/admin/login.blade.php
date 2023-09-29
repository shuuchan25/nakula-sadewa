@extends('admin.partials.master')
@section('content')
<div class="background-blur"></div>
    <section class="login-container flex-column">

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        <form action="/admin/login" method="post" autocomplete="off">
            @csrf
            <div class="login-form">
                <div class="w-100 text-center text-white">
                    <h2>Login Admin</h2>
                    <h4>Dashboard Nakula Sadewa</h4>
                </div>
                <div class="input-wrap">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}" autocomplete="off">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-wrap">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="primary-button mt-3">Login</button>
            </div>
        </form>

    </section>
@endsection
