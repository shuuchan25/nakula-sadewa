@extends('partials.master')

{{-- <footer>

</footer> --}}

<div class="footer-wrapper" style="position: static">
    <div class="container">
            <div class="row footer">
                <div class="col-12 mt-5 mb-5 kolom-wrapper">
                    <div class="row w-100 d-flex">
                        <div class="col w-100 justify-content-center logo">
                            <div class="d-flex justify-content-center w-100">
                                <img class="nakula" src="../assets/icons/Logo_VokasiUB.png" alt="" style="height: 98px; width: auto;">
                            </div>
                            <div class="d-flex justify-content-center w-100 partner-logo">
                                <img src="../assets/icons/facebook.svg" alt="fb">
                                <img src="../assets/icons/twitter.svg" alt="twit">
                                <img src="../assets/icons/instagram.svg" alt="ig">
                                <img src="../assets/icons/instagram.svg" alt="ig">
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, exercitationem?</>
                        </div>
                        <div class="col komen">
                            <div class="row">
                                <h6>Ulasan</h6>
                                <p>Nama
                                    <div class="input" style="margin-top: -15px">
                                        <input type="nama" class="input" style="height: 36px; width: 100%;">
                                    </div>
                                </p>
                            </div>
                            <div class="row">
                                <p>Ulasan
                                    <div class="input" style="margin-top: -15px">
                                        <textarea name="" id="" style="resize: none; height: 108px"></textarea>
                                    </div>
                                </p>
                            </div>
                            <button type="submit" class="primary-button mt-3">Kirim</button>
                        </div>
                        <div class="col-lg-3">
                            <div class="row alamat">
                                <h6>Alamat</h6>
                                <div class="col-2 icon-alamat">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.4167C3.25 5.62281 7.17493 1.75 12 1.75C16.8251 1.75 20.75 5.62281 20.75 10.4167C20.75 13.3982 19.0113 16.3409 17.1686 18.4829C16.236 19.5669 15.2463 20.482 14.3733 21.1328C13.9374 21.4577 13.5186 21.7258 13.1405 21.9162C12.786 22.0947 12.3812 22.25 12 22.25C11.6188 22.25 11.214 22.0947 10.8595 21.9162C10.4814 21.7258 10.0626 21.4577 9.62674 21.1328C8.75371 20.482 7.76395 19.5669 6.83144 18.4829C4.98872 16.3409 3.25 13.3982 3.25 10.4167ZM12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13Z" fill="#fcb600"/>
                                        </svg>
                                </div>
                                <div class="col teks-alamat" style="margin-left: -20px;">
                                    <p>Lorem, ipsum dolor sit amet consectectur</p>
                                </div>
                            </div>
                            <div class="row contact-us mt-5">
                                <div class="col contact-us">
                                    <h6>Hubungi Kami</h6>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-2 icon-mail">
                                                    <a href="https://instagram.com"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 9C1.25 5.82436 3.82436 3.25 7 3.25H17C20.1756 3.25 22.75 5.82436 22.75 9V15C22.75 18.1756 20.1756 20.75 17 20.75H7C3.82436 20.75 1.25 18.1756 1.25 15V9ZM6.45 8.4C6.11863 8.15147 5.64853 8.21863 5.4 8.55C5.15147 8.88137 5.21863 9.35147 5.55 9.6L10.35 13.2C11.3278 13.9333 12.6722 13.9333 13.65 13.2L18.45 9.6C18.7814 9.35147 18.8485 8.88137 18.6 8.55C18.3515 8.21863 17.8814 8.15147 17.55 8.4L12.75 12C12.3056 12.3333 11.6944 12.3333 11.25 12L6.45 8.4Z" fill="#fcb600"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col mail" style="margin-left: -20px; margin-top: 2px">
                                                    <p>nakulasadewa@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 icon-phone">
                                                    <a href="https://instagram.com"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.0621 20.2183C17.1077 22.1726 12.1028 20.3363 7.88327 16.1167C3.66372 11.8972 1.82739 6.89227 3.7817 4.93795L5.06847 3.65118C5.9568 2.76286 7.42054 2.78634 8.33784 3.70363L10.3309 5.69672C11.2482 6.61401 11.2717 8.07776 10.3834 8.96609L10.107 9.24247C9.62737 9.72209 9.58045 10.4958 10.0261 11.0359C10.456 11.5568 10.9194 12.0756 11.4219 12.5781C11.9244 13.0806 12.4432 13.544 12.9641 13.9739C13.5042 14.4196 14.2779 14.3726 14.7575 13.893L15.0339 13.6166C15.9222 12.7283 17.386 12.7518 18.3033 13.6691L20.2964 15.6622C21.2137 16.5795 21.2371 18.0432 20.3488 18.9315L19.0621 20.2183Z" fill="#fcb600" stroke="#fcb600" stroke-width="1.5"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col mail" style="margin-left: -20px; margin-top: 2px">
                                                    <p>nakulasadewa@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="row contact">
                                <div class="col sosmed">
                                    <h6>Sosial Media</h6>
                                    <a href="https://instagram.com" target=_blank><img src="../assets/icons/facebook.svg" alt="fb"></a>
                                    <a href="https://instagram.com" target=_blank><img src="../assets/icons/twitter.svg" alt="twit"></a>
                                    <a href="https://instagram.com" target=_blank><img src="../assets/icons/instagram.svg" alt="ig"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row copyright">
            <p>Copyright <i class="fa-regular fa-copyright"></i> Nakula Sadewa All rights reserved.</p>
        </div>
    </div>
</div>
