@extends('user.partials.master')

<!-- Navbar -->




{{-- <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
      <img src="../assets/img/Rocket.svg" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link" href="#">Beranda</a>
            <a class="nav-item nav-link" href="#about">Eksplorasi</a>
            <a class="nav-item nav-link" href="#services">FAQ</a>
            <a class="nav-item nav-link" href="#gallery">Kontak</a>
            <a class="nav-item nav-link" href="#gallery">Petunjuk</a>
          </div>
          <div class="cart">
            <img src="../assets/img/Cart.svg" alt="">
          </div>

      </div>
  </div>
</nav> --}}

<!-- End of Navbar -->

<nav class="navbar navbar-expand-lg">
  {{-- <div class="container"> --}}
  <div class="container">
        <img class="logo" src="../assets/icons/Rocket.svg" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.hide">Beranda</a>
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.hide">Eksplorasi</a>
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.hide">FAQ</a>
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.hide">Kontak</a>
        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.hide">Petunjuk</a>
      </div>
      <div class="cart">
        <img src="../assets/icons/Cart.svg" alt="">
      </div>
    </div>
  </div>
</div>
</nav>