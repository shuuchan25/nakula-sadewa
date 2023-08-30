@extends('admin.partials.master') {{-- Gantikan dengan layout yang Anda gunakan --}}

@section('content')
  <section class="login-page">
        <form action="" method="">
            <div class="login-form">
                <img src="../assets/img/User.png" alt="">
            <div class="input-wrap">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-wrap">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        </form>

  </section>

@endsection
