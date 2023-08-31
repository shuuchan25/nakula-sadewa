@extends('admin.partials.master') {{-- Gantikan dengan layout yang Anda gunakan --}}

@section('content')
    <section class="login-page">
        <form action="" method="">
            <div class="login-form">
                <div class="w-100">
                    <h1>Login Admin</h1>
                    <h2>Dashboard Nakula Sadewa</h2>
                </div>
                <div class="input-wrap">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="input-wrap">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit" class="primary-button mt-3">Login</button>
            </div>
        </form>

    </section>
@endsection
