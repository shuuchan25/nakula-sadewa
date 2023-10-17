document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
        var scrollPosition = window.scrollY;

        if (scrollPosition > 0) {
            // Efek saat scroll ke bawah
            navbar.style.background = "rgba(143, 1, 10, 0.7)"; // Warna dengan opacity
            navbar.style.backdropFilter = "blur(10px)"; // Efek blur
        } else {
            // Efek saat berada di atas
            navbar.style.background = "var(--primary)"; // Warna solid
            navbar.style.backdropFilter = "none"; // Hapus efek blur
        }
    });
});
