{{-- MENUBAR --}}
<div class="container menubar-tab mb-5">
    <div class="card border-0 shadow-sm rounded-4">
        <div class="scrollmenu p-3">
            <ul class="nav  justify-content-center gap-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('attractions')  ? 'active' : '' }}" href="/attractions">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" id="Line_Color" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" stroke="#AC0B05"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                                <path id="primary" d="M15.24,6.63a1.09,1.09,0,0,0-2,0l-2.8,5.53v0L9,8.9a1,1,0,0,0-1.8,0L3,18H21Z" style="fill:none;stroke:;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"></path>
                            </g>
                        </svg>
                    Atraksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hotels')  ? 'active' : '' }}" href="/hotels">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#FCB600">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{opacity:0.2;fill:none;stroke:#FCB600;stroke-width:5.000000e-02;stroke-miterlimit:10;} </style> <g id="Layer_Grid"></g>
                            <g id="Layer_2"> <path d="M21,8c0-2.2-1.8-4-4-4H7C4.8,4,3,5.8,3,8v3.8c-0.6,0.5-1,1.3-1,2.2v2.7V17v2c0,0.6,0.4,1,1,1s1-0.4,1-1v-1h16v1 c0,0.6,0.4,1,1,1s1-0.4,1-1v-2v-0.3V14c0-0.9-0.4-1.7-1-2.2V8z M5,8c0-1.1,0.9-2,2-2h10c1.1,0,2,0.9,2,2v3h-1v-1c0-1.7-1.3-3-3-3 h-1c-0.8,0-1.5,0.3-2,0.8C11.5,7.3,10.8,7,10,7H9c-1.7,0-3,1.3-3,3v1H5V8z M16,10v1h-3v-1c0-0.6,0.4-1,1-1h1C15.6,9,16,9.4,16,10z M11,10v1H8v-1c0-0.6,0.4-1,1-1h1C10.6,9,11,9.4,11,10z M20,16H4v-2c0-0.6,0.4-1,1-1h3h3h2h3h3c0.6,0,1,0.4,1,1V16z"></path>
                            </g> </g>
                        </svg>

                    Akomodasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('culinaries')  ? 'active' : '' }}" href="/culinaries">
                        <svg width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#AC0B05">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"><path stroke="#AC0B05" d="M128 352.576V352a288 288 0 0 1 491.072-204.224 192 192 0 0 1 274.24 204.48 64 64 0 0 1 57.216 74.24C921.6 600.512 850.048 710.656 736 756.992V800a96 96 0 0 1-96 96H384a96 96 0 0 1-96-96v-43.008c-114.048-46.336-185.6-156.48-214.528-330.496A64 64 0 0 1 128 352.64zm64-.576h64a160 160 0 0 1 320 0h64a224 224 0 0 0-448 0zm128 0h192a96 96 0 0 0-192 0zm439.424 0h68.544A128.256 128.256 0 0 0 704 192c-15.36 0-29.952 2.688-43.52 7.616 11.328 18.176 20.672 37.76 27.84 58.304A64.128 64.128 0 0 1 759.424 352zM672 768H352v32a32 32 0 0 0 32 32h256a32 32 0 0 0 32-32v-32zm-342.528-64h365.056c101.504-32.64 165.76-124.928 192.896-288H136.576c27.136 163.072 91.392 255.36 192.896 288z"></path></g>
                        </svg>
                    Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('travels')  ? 'active' : '' }}" href="/travels">
                        <svg fill="#FCB600" height="30" width="30" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-330 131 299 299" xml:space="preserve" stroke="#000000" stroke-width="0.0029900000000000005"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Page 1</title> <desc>Created with Sketch.</desc> <g> <path d="M-60.4,366.1h-120.7h-120.7c-2.9,0-5.2,0.2-5.2,10.5c0,10.3,2.4,10.3,5.2,10.3h15.8v18.3c0,2.9,2.4,5.2,5.2,5.2h31.3 c2.9,0,5.2-2.3,5.2-5.2v-18.3h63.1h63.2v18.3c0,2.9,2.3,5.2,5.2,5.2h31.3c2.9,0,5.3-2.3,5.3-5.2v-18.3h15.7c2.9,0,5.2,0.2,5.2-10.3 C-55.1,366.1-57.5,366.1-60.4,366.1z"></path> <path d="M-301.9,357.2h241.2c2.9,0,5.3-2.4,5.3-5.2v-21c0-0.1,0-0.1,0-0.1c-0.2-44.5-2.4-61.7-31.7-68.3 c-3.2-77.6-20.5-77.6-94.1-77.6c-73.5,0-90.5,0-93.6,77.5c-30,6.5-32.1,23.7-32.2,68.4c0,0,0,0.1,0,0.1v21 C-307.2,354.9-304.8,357.2-301.9,357.2z M-181.4,300.2c45.6,0,55.4,0.1,54.8,10H-236C-236.4,300.2-226.9,300.2-181.4,300.2z M-233.9,320.9c-0.2-0.7-0.3-1.4-0.5-2h106c-0.2,0.6-0.3,1.2-0.5,1.8c-0.5,1.9-1,3.7-1.4,5.3h-102.3 C-233,324.4-233.4,322.7-233.9,320.9z M-144.6,341.5h-36.7h-36.7c-7.4,0-9.6,0-12-6.9h97.3C-135.2,341.2-137.3,341.5-144.6,341.5z M-97,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7,15.7-15.7,15.7c-8.7,0-15.7-7-15.7-15.7C-112.8,317.2-105.7,310.2-97,310.2z M-244.4,213.4c6.8-7.5,30.4-7.5,63-7.5c32.8,0,56.5,0,63.4,7.6c6,6.5,8.5,24.6,9.6,46.2c-17.7-1.3-41.3-1.3-72.7-1.3 c-31.4,0-55,0-72.7,1.3C-252.8,238.1-250.3,219.9-244.4,213.4z M-264.9,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7.1,15.7-15.7,15.7 c-8.7,0-15.7-7-15.7-15.7C-280.6,317.2-273.6,310.2-264.9,310.2z"></path> </g> </g></svg>
                    Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('shops')  ? 'active' : '' }}" href="/shops">
                        <svg fill="#AC0B05" height="30" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M421.2,128h-42.7v21.3c0,23.5-19.1,42.7-42.7,42.7c-23.5,0-42.7-19.1-42.7-42.7V128h-85.3v21.3c0,23.5-19.1,42.7-42.7,42.7 c-23.5,0-42.7-19.1-42.7-42.7V128H79.9c0,213.3-21.3,384-21.3,384h384C442.5,512,421.2,341.3,421.2,128z M165.2,170.7 c11.8,0,21.3-9.5,21.3-21.3v-42.7c0-35.4,28.6-64,64-64c35.4,0,64,28.6,64,64v42.7c0,11.8,9.5,21.3,21.3,21.3 c11.8,0,21.3-9.5,21.3-21.3v-42.7C357.2,47.8,309.4,0,250.5,0c-58.9,0-106.7,47.8-106.7,106.7v42.7 C143.9,161.1,153.4,170.7,165.2,170.7z"></path> </g></svg>
                    Pusat Oleh-Oleh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('maps')  ? 'active' : '' }}" href="/maps">
                        <svg fill="#AC0B05" height="30" width="30" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M397.496,0C334.264,0,283,51.528,282.992,115.096c0,46.328,27.296,86.16,66.552,104.408 c8.392,28.984,22.56,61.296,32.008,81.496v103.104h-220.88c0.608-1.976,1.232-3.952,1.792-5.904 C201.712,379.944,229,340.12,229,293.792c0-63.568-51.264-115.096-114.504-115.096C51.264,178.696,0,230.224,0,293.792 c0,46.328,27.296,86.16,66.552,104.408c12.408,42.904,37.528,93.208,41.192,100.504L114.496,512l6.72-13.288 c2.624-5.152,16.064-32.064,28.088-62.6H413.56V300.768c9.464-20.208,23.552-52.384,31.904-81.264 C484.712,201.248,512,161.424,512,115.096C512,51.528,460.736,0,397.496,0z M114.504,332.032 c-21.016,0-38.048-17.12-38.048-38.248s17.032-38.248,38.048-38.248c21.016,0,38.048,17.12,38.048,38.248 S135.52,332.032,114.504,332.032z M397.504,153.344c-21.016,0-38.048-17.128-38.048-38.248c0-21.128,17.032-38.248,38.048-38.248 s38.048,17.128,38.048,38.248S418.512,153.344,397.504,153.344z"></path> </g> </g> </g></svg>
                    Peta Wisata</a>
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- end MENUBAR --}}
