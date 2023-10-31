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


if ($('.quantity-input')) {
    $('.quantity-input').after()
    .prepend(`<div class="qty-min qty-btn disabled" onclick="this.parentNode.querySelector('.qty').stepDown()"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>`)
    .append(`<div class="qty-plus qty-btn" onclick="this.parentNode.querySelector('.qty').stepUp()"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>`);

    $('.quantity-input .qty').change(function() {

        if ($(this).val() > 1) {
            $(this).parent('.quantity-input').children('.qty-min').removeClass('disabled')
        }else{
            $(this).parent('.quantity-input').children('.qty-min').addClass('disabled')
        }


    });

    $('.quantity-input').on('click', '.qty-btn', function(e) {
        e.preventDefault();

        $(this).parent('.quantity-input').children('.qty').change()

    });


}

$(document).on('click','.card-dropdown .btn-card-dropdown', function(e){
    e.preventDefault()
    $(this).parents('.card-dropdown').find('.card-dropdown-content').toggleClass('show')
})