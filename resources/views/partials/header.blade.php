@extends('partials.master')

<!-- Navbar -->

<nav class="navbar navbar-expand-lg" style="position: fixed">
    <div class="container">
    <img class="logo" src="../assets/icons/Rocket.svg" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    <a class="nav-link" href="#">Eksplorasi</a>
                    <a class="nav-link" href="#">FAQ</a>
                    <a class="nav-link" href="#">Kontak</a>
                    <a class="nav-link" href="#">Petunjuk</a>
                </div>
            <div class="cart">
                <img src="../assets/icons/Cart.svg" alt="">
            </div>
        </div>
    </div>
</nav>

<!-- End of Navbar -->
