<!-- Sidebar -->
<button class="openbtn d-xl-none d-sm-block" onclick="openNav()">☰</button>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="sidebar-menu">
        <div class="w-100">
            <div class="logo">
                <img src="../assets/img/vokasi.jpeg" alt="">
            </div>
            <div class="menu-buttons">
                <p class="">Admin Tools</p>
                <button onclick="location.href='overviews'" class="{{ Request::is('admin/overviews') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.897 2.8421C15.311 2.8421 15.647 3.1781 15.647 3.5921C15.647 4.0061 15.311 4.3421 14.897 4.3421H7.629C5.121 4.3421 3.5 6.0661 3.5 8.7361V16.8181C3.5 19.5231 5.082 21.2031 7.629 21.2031H16.233C18.741 21.2031 20.362 19.4821 20.362 16.8181V9.7791C20.362 9.3651 20.698 9.0291 21.112 9.0291C21.526 9.0291 21.862 9.3651 21.862 9.7791V16.8181C21.862 20.3381 19.6 22.7031 16.233 22.7031H7.629C4.262 22.7031 2 20.3381 2 16.8181V8.7361C2 5.2111 4.262 2.8421 7.629 2.8421H14.897ZM17.0124 9.6719C17.3404 9.9259 17.4004 10.3969 17.1464 10.7239L14.2164 14.5039C14.0944 14.6619 13.9144 14.7649 13.7164 14.7889C13.5164 14.8159 13.3184 14.7579 13.1604 14.6349L10.3424 12.4209L7.8114 15.7099C7.6634 15.9019 7.4414 16.0029 7.2164 16.0029C7.0564 16.0029 6.8954 15.9519 6.7594 15.8479C6.4314 15.5949 6.3694 15.1239 6.6224 14.7959L9.6154 10.9059C9.7374 10.7469 9.9184 10.6439 10.1164 10.6189C10.3184 10.5929 10.5164 10.6489 10.6734 10.7739L13.4934 12.9889L15.9604 9.8059C16.2144 9.4769 16.6844 9.4159 17.0124 9.6719ZM19.9674 2C21.4414 2 22.6394 3.198 22.6394 4.672C22.6394 6.146 21.4414 7.345 19.9674 7.345C18.4944 7.345 17.2954 6.146 17.2954 4.672C17.2954 3.198 18.4944 2 19.9674 2ZM19.9674 3.5C19.3214 3.5 18.7954 4.025 18.7954 4.672C18.7954 5.318 19.3214 5.845 19.9674 5.845C20.6134 5.845 21.1394 5.318 21.1394 4.672C21.1394 4.025 20.6134 3.5 19.9674 3.5Z"
                            fill="currentColor" />
                    </svg>
                    Overview
                </button>
                <button onclick="location.href='user-management'" class="{{ Request::is('admin/user-management') || Request::is('admin/add-user') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.59176 13.957C12.8508 13.957 17.1838 14.324 17.1838 17.499C17.1838 20.8435 12.1349 21.0442 9.96916 21.0562L9.18286 21.0562C6.87369 21.0443 1.99976 20.8447 1.99976 17.519C1.99976 14.1707 7.04865 13.9698 9.21435 13.9578L9.47455 13.957C9.5151 13.957 9.5542 13.957 9.59176 13.957ZM9.59176 15.457C6.81276 15.457 3.49976 15.814 3.49976 17.519C3.49976 18.871 5.54976 19.557 9.59176 19.557C13.6338 19.557 15.6838 18.864 15.6838 17.499C15.6838 16.144 13.6338 15.457 9.59176 15.457ZM18.7065 13.4899C21.4125 13.8949 21.9795 15.1479 21.9795 16.1269C21.9795 16.8559 21.6645 17.8429 20.1615 18.4119C20.0745 18.4449 19.9845 18.4609 19.8955 18.4609C19.5925 18.4609 19.3075 18.2759 19.1945 17.9769C19.0475 17.5899 19.2425 17.1559 19.6295 17.0099C20.4795 16.6879 20.4795 16.2949 20.4795 16.1269C20.4795 15.5599 19.8085 15.1719 18.4855 14.9749C18.0755 14.9129 17.7925 14.5309 17.8535 14.1219C17.9155 13.7119 18.3045 13.4369 18.7065 13.4899ZM9.59176 2C12.4228 2 14.7268 4.304 14.7268 7.135C14.7328 8.499 14.2038 9.787 13.2398 10.757C12.2778 11.728 10.9928 12.265 9.62576 12.27H9.59176C6.75976 12.27 4.45576 9.966 4.45576 7.135C4.45576 4.304 6.75976 2 9.59176 2ZM16.6794 3.1238C18.6444 3.4458 20.0704 5.1268 20.0704 7.1198C20.0664 9.1248 18.5694 10.8468 16.5874 11.1248C16.5524 11.1298 16.5174 11.1318 16.4824 11.1318C16.1144 11.1318 15.7934 10.8608 15.7404 10.4858C15.6834 10.0758 15.9684 9.6958 16.3784 9.6388C17.6264 9.4638 18.5684 8.3808 18.5704 7.1188C18.5704 5.8648 17.6724 4.8068 16.4374 4.6048C16.0284 4.5368 15.7514 4.1518 15.8184 3.7428C15.8854 3.3338 16.2724 3.0588 16.6794 3.1238ZM9.59176 3.5C7.58676 3.5 5.95576 5.131 5.95576 7.135C5.95576 9.139 7.58676 10.77 9.59176 10.77H9.62276C10.5868 10.766 11.4948 10.387 12.1758 9.7C12.8578 9.015 13.2308 8.104 13.2268 7.138C13.2268 5.131 11.5958 3.5 9.59176 3.5Z"
                            fill="currentColor" />
                    </svg>
                    Pengaturan User
                </button>
                <button onclick="location.href='article'"
                    class="{{ Request::is('admin/article') || Request::is('admin/add-article') || Request::is('admin/edit-article') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.9756 2.00024C14.0185 2.00024 14.0606 2.00386 14.1016 2.0108L14.2385 2.01164C14.4425 2.01164 14.6375 2.09464 14.7795 2.24164L19.8445 7.51864C19.9785 7.65765 20.0536 7.84465 20.0536 8.03765V17.2036C20.0715 19.7126 18.1175 21.7626 15.6045 21.8646L7.58546 21.8656H7.47646C5.02652 21.8103 3.06163 19.8289 3.00177 17.4028L3.00146 6.49064C3.05946 4.00964 5.10846 2.01164 7.57147 2.01164L13.8495 2.0108C13.8905 2.00386 13.9326 2.00024 13.9756 2.00024ZM13.2255 3.51124L7.57346 3.51164C5.91646 3.51164 4.54046 4.85364 4.50146 6.50864V17.2036C4.46446 18.9166 5.81446 20.3276 7.51046 20.3656H15.5745C17.2435 20.2966 18.5655 18.9096 18.5535 17.2096L18.5535 8.98325L16.5436 8.98425C14.7136 8.97925 13.2256 7.48724 13.2256 5.65924L13.2255 3.51124ZM13.7888 14.6083C14.2028 14.6083 14.5388 14.9443 14.5388 15.3583C14.5388 15.7723 14.2028 16.1083 13.7888 16.1083H8.38876C7.97476 16.1083 7.63876 15.7723 7.63876 15.3583C7.63876 14.9443 7.97476 14.6083 8.38876 14.6083H13.7888ZM11.7439 10.8563C12.1579 10.8563 12.4939 11.1923 12.4939 11.6063C12.4939 12.0203 12.1579 12.3563 11.7439 12.3563H8.38787C7.97387 12.3563 7.63787 12.0203 7.63787 11.6063C7.63787 11.1923 7.97387 10.8563 8.38787 10.8563H11.7439ZM14.7255 4.35224L14.7256 5.65924C14.7256 6.66324 15.5426 7.48124 16.5456 7.48425L17.7315 7.48325L14.7255 4.35224Z"
                            fill="currentColor" />
                    </svg>
                    Artikel
                </button>
                <button onclick="location.href='destinasi-wisata'"
                    class="{{ Request::is('admin/destinasi-wisata') || Request::is('admin/add-destinasi-wisata') || Request::is('admin/edit-destinasi-wisata') || Request::is('admin/detail-destinasi-wisata') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.9756 2.00024C14.0185 2.00024 14.0606 2.00386 14.1016 2.0108L14.2385 2.01164C14.4425 2.01164 14.6375 2.09464 14.7795 2.24164L19.8445 7.51864C19.9785 7.65765 20.0536 7.84465 20.0536 8.03765V17.2036C20.0715 19.7126 18.1175 21.7626 15.6045 21.8646L7.58546 21.8656H7.47646C5.02652 21.8103 3.06163 19.8289 3.00177 17.4028L3.00146 6.49064C3.05946 4.00964 5.10846 2.01164 7.57147 2.01164L13.8495 2.0108C13.8905 2.00386 13.9326 2.00024 13.9756 2.00024ZM13.2255 3.51124L7.57346 3.51164C5.91646 3.51164 4.54046 4.85364 4.50146 6.50864V17.2036C4.46446 18.9166 5.81446 20.3276 7.51046 20.3656H15.5745C17.2435 20.2966 18.5655 18.9096 18.5535 17.2096L18.5535 8.98325L16.5436 8.98425C14.7136 8.97925 13.2256 7.48724 13.2256 5.65924L13.2255 3.51124ZM13.7888 14.6083C14.2028 14.6083 14.5388 14.9443 14.5388 15.3583C14.5388 15.7723 14.2028 16.1083 13.7888 16.1083H8.38876C7.97476 16.1083 7.63876 15.7723 7.63876 15.3583C7.63876 14.9443 7.97476 14.6083 8.38876 14.6083H13.7888ZM11.7439 10.8563C12.1579 10.8563 12.4939 11.1923 12.4939 11.6063C12.4939 12.0203 12.1579 12.3563 11.7439 12.3563H8.38787C7.97387 12.3563 7.63787 12.0203 7.63787 11.6063C7.63787 11.1923 7.97387 10.8563 8.38787 10.8563H11.7439ZM14.7255 4.35224L14.7256 5.65924C14.7256 6.66324 15.5426 7.48124 16.5456 7.48425L17.7315 7.48325L14.7255 4.35224Z"
                            fill="currentColor" />
                    </svg>
                    Destinasi Wisata
                </button>
                <button onclick="location.href='desa-wisata'"
                    class="{{ Request::is('admin/desa-wisata') || Request::is('admin/add-desa-wisata') || Request::is('admin/edit-desa-wisata') || Request::is('admin/detail-desa-wisata') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.9756 2.00024C14.0185 2.00024 14.0606 2.00386 14.1016 2.0108L14.2385 2.01164C14.4425 2.01164 14.6375 2.09464 14.7795 2.24164L19.8445 7.51864C19.9785 7.65765 20.0536 7.84465 20.0536 8.03765V17.2036C20.0715 19.7126 18.1175 21.7626 15.6045 21.8646L7.58546 21.8656H7.47646C5.02652 21.8103 3.06163 19.8289 3.00177 17.4028L3.00146 6.49064C3.05946 4.00964 5.10846 2.01164 7.57147 2.01164L13.8495 2.0108C13.8905 2.00386 13.9326 2.00024 13.9756 2.00024ZM13.2255 3.51124L7.57346 3.51164C5.91646 3.51164 4.54046 4.85364 4.50146 6.50864V17.2036C4.46446 18.9166 5.81446 20.3276 7.51046 20.3656H15.5745C17.2435 20.2966 18.5655 18.9096 18.5535 17.2096L18.5535 8.98325L16.5436 8.98425C14.7136 8.97925 13.2256 7.48724 13.2256 5.65924L13.2255 3.51124ZM13.7888 14.6083C14.2028 14.6083 14.5388 14.9443 14.5388 15.3583C14.5388 15.7723 14.2028 16.1083 13.7888 16.1083H8.38876C7.97476 16.1083 7.63876 15.7723 7.63876 15.3583C7.63876 14.9443 7.97476 14.6083 8.38876 14.6083H13.7888ZM11.7439 10.8563C12.1579 10.8563 12.4939 11.1923 12.4939 11.6063C12.4939 12.0203 12.1579 12.3563 11.7439 12.3563H8.38787C7.97387 12.3563 7.63787 12.0203 7.63787 11.6063C7.63787 11.1923 7.97387 10.8563 8.38787 10.8563H11.7439ZM14.7255 4.35224L14.7256 5.65924C14.7256 6.66324 15.5426 7.48124 16.5456 7.48425L17.7315 7.48325L14.7255 4.35224Z"
                            fill="currentColor" />
                    </svg>
                    Desa Wisata
                </button>
                <button onclick="location.href='penginapan'" class="{{ Request::is('admin/penginapan') || Request::is('admin/add-penginapan') || Request::is('admin/edit-penginapan') || Request::is('admin/detail-penginapan') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.2729 14.7351C21.6859 14.7661 21.9949 15.1271 21.9639 15.5401L21.7739 18.0491C21.6169 20.1191 19.8699 21.7401 17.7949 21.7401H6.19494C4.11994 21.7401 2.37294 20.1191 2.21594 18.0491L2.02594 15.5401C1.99494 15.1271 2.30494 14.7661 2.71794 14.7351C3.13294 14.7201 3.49094 15.0131 3.52294 15.4271L3.71194 17.9351C3.80994 19.2271 4.89994 20.2401 6.19494 20.2401H17.7949C19.0899 20.2401 20.1809 19.2271 20.2779 17.9351L20.4679 15.4271C20.4999 15.0131 20.8669 14.7191 21.2729 14.7351ZM13.2851 2C14.7881 2 16.0332 3.12626 16.2207 4.57903L18.1902 4.5799C20.2862 4.5799 21.9902 6.2889 21.9902 8.3909V11.8299C21.9902 12.0969 21.8482 12.3429 21.6192 12.4769C19.1509 13.9224 16.0242 14.7655 12.7448 14.878L12.7451 16.6766C12.7451 17.0906 12.4091 17.4266 11.9951 17.4266C11.5811 17.4266 11.2451 17.0906 11.2451 16.6766L11.2445 14.8782C7.96843 14.7668 4.8414 13.9235 2.37124 12.4769C2.14124 12.3429 2.00024 12.0969 2.00024 11.8299V8.3809C2.00024 6.2849 3.70924 4.5799 5.81024 4.5799L7.76955 4.57903C7.95709 3.12626 9.20221 2 10.7051 2H13.2851ZM18.1902 6.0799H5.81024C4.53624 6.0799 3.50024 7.1119 3.50024 8.3809V11.3929C5.87396 12.6827 8.86648 13.3895 11.9812 13.3909L11.9951 13.3896L12.0062 13.39L12.4824 13.385C15.4282 13.3149 18.2383 12.616 20.4902 11.3929V8.3909C20.4902 7.1159 19.4592 6.0799 18.1902 6.0799ZM13.2851 3.5H10.7051C10.0318 3.5 9.4634 3.95827 9.29549 4.57928H14.6948C14.5269 3.95827 13.9585 3.5 13.2851 3.5Z"
                            fill="currentColor" />
                    </svg>
                    Penginapan
                </button>
                <button onclick="location.href='gallery'" class="{{ Request::is('gallery') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.3005 2C19.6855 2 21.9605 4.371 21.9605 7.899V16.051C21.9605 19.579 19.6855 21.95 16.3005 21.95H7.65049C4.27049 21.95 2.00049 19.579 2.00049 16.051V7.899C2.00049 4.371 4.27049 2 7.65049 2H16.3005ZM16.3005 3.5H7.65049C5.12949 3.5 3.50049 5.227 3.50049 7.899V16.051C3.50049 18.724 5.12949 20.45 7.65049 20.45H16.3005C18.8275 20.45 20.4605 18.724 20.4605 16.051V7.899C20.4605 5.227 18.8275 3.5 16.3005 3.5ZM16.9395 12.0994C16.9458 12.1045 16.952 12.1097 16.9651 12.1218L16.9844 12.1403C16.9883 12.1441 16.9926 12.1483 16.9973 12.1529L17.0531 12.2083C17.2335 12.3889 17.732 12.898 19.2175 14.4234C19.5065 14.7194 19.5015 15.1944 19.2045 15.4834C18.9085 15.7744 18.4325 15.7654 18.1435 15.4694C18.1435 15.4694 16.0945 13.3664 15.9485 13.2244C15.7935 13.0974 15.5445 13.0234 15.2995 13.0474C15.0505 13.0724 14.8265 13.1914 14.6675 13.3844C12.3435 16.2034 12.3155 16.2304 12.2775 16.2674C11.4195 17.1094 10.0345 17.0954 9.19149 16.2354C9.19149 16.2354 8.26149 15.2914 8.24549 15.2724C8.01449 15.0584 7.60249 15.0724 7.35549 15.3334L5.82549 16.9464C5.67749 17.1024 5.47949 17.1804 5.28149 17.1804C5.09549 17.1804 4.91049 17.1124 4.76549 16.9744C4.46449 16.6904 4.45249 16.2144 4.73749 15.9154L6.26549 14.3024C7.07449 13.4434 8.43949 13.4014 9.30249 14.2114L10.2605 15.1834C10.5275 15.4534 10.9615 15.4584 11.2295 15.1944C11.3305 15.0754 13.5085 12.4304 13.5085 12.4304C13.9225 11.9284 14.5065 11.6184 15.1555 11.5544C15.8055 11.4974 16.4365 11.6864 16.9395 12.0994ZM8.55869 6.6289C9.94069 6.6299 11.0637 7.7539 11.0637 9.1329C11.0637 10.5139 9.93969 11.6379 8.55869 11.6379C7.17769 11.6379 6.05469 10.5139 6.05469 9.1329C6.05469 7.7519 7.17769 6.6289 8.55869 6.6289ZM8.55769 8.1289C8.00469 8.1289 7.55469 8.5789 7.55469 9.1329C7.55469 9.6869 8.00469 10.1379 8.55869 10.1379C9.11269 10.1379 9.56369 9.6869 9.56369 9.1329C9.56369 8.5799 9.11269 8.1299 8.55769 8.1289Z"
                            fill="currentColor" />
                    </svg>
                    Kuliner
                </button>
                <button onclick="location.href='gallery'" class="{{ Request::is('gallery') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.3005 2C19.6855 2 21.9605 4.371 21.9605 7.899V16.051C21.9605 19.579 19.6855 21.95 16.3005 21.95H7.65049C4.27049 21.95 2.00049 19.579 2.00049 16.051V7.899C2.00049 4.371 4.27049 2 7.65049 2H16.3005ZM16.3005 3.5H7.65049C5.12949 3.5 3.50049 5.227 3.50049 7.899V16.051C3.50049 18.724 5.12949 20.45 7.65049 20.45H16.3005C18.8275 20.45 20.4605 18.724 20.4605 16.051V7.899C20.4605 5.227 18.8275 3.5 16.3005 3.5ZM16.9395 12.0994C16.9458 12.1045 16.952 12.1097 16.9651 12.1218L16.9844 12.1403C16.9883 12.1441 16.9926 12.1483 16.9973 12.1529L17.0531 12.2083C17.2335 12.3889 17.732 12.898 19.2175 14.4234C19.5065 14.7194 19.5015 15.1944 19.2045 15.4834C18.9085 15.7744 18.4325 15.7654 18.1435 15.4694C18.1435 15.4694 16.0945 13.3664 15.9485 13.2244C15.7935 13.0974 15.5445 13.0234 15.2995 13.0474C15.0505 13.0724 14.8265 13.1914 14.6675 13.3844C12.3435 16.2034 12.3155 16.2304 12.2775 16.2674C11.4195 17.1094 10.0345 17.0954 9.19149 16.2354C9.19149 16.2354 8.26149 15.2914 8.24549 15.2724C8.01449 15.0584 7.60249 15.0724 7.35549 15.3334L5.82549 16.9464C5.67749 17.1024 5.47949 17.1804 5.28149 17.1804C5.09549 17.1804 4.91049 17.1124 4.76549 16.9744C4.46449 16.6904 4.45249 16.2144 4.73749 15.9154L6.26549 14.3024C7.07449 13.4434 8.43949 13.4014 9.30249 14.2114L10.2605 15.1834C10.5275 15.4534 10.9615 15.4584 11.2295 15.1944C11.3305 15.0754 13.5085 12.4304 13.5085 12.4304C13.9225 11.9284 14.5065 11.6184 15.1555 11.5544C15.8055 11.4974 16.4365 11.6864 16.9395 12.0994ZM8.55869 6.6289C9.94069 6.6299 11.0637 7.7539 11.0637 9.1329C11.0637 10.5139 9.93969 11.6379 8.55869 11.6379C7.17769 11.6379 6.05469 10.5139 6.05469 9.1329C6.05469 7.7519 7.17769 6.6289 8.55869 6.6289ZM8.55769 8.1289C8.00469 8.1289 7.55469 8.5789 7.55469 9.1329C7.55469 9.6869 8.00469 10.1379 8.55869 10.1379C9.11269 10.1379 9.56369 9.6869 9.56369 9.1329C9.56369 8.5799 9.11269 8.1299 8.55769 8.1289Z"
                            fill="currentColor" />
                    </svg>
                    Biro Perjalanan
                </button>
                <button onclick="location.href='gallery'" class="{{ Request::is('gallery') ? 'active-menu' : '' }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.3005 2C19.6855 2 21.9605 4.371 21.9605 7.899V16.051C21.9605 19.579 19.6855 21.95 16.3005 21.95H7.65049C4.27049 21.95 2.00049 19.579 2.00049 16.051V7.899C2.00049 4.371 4.27049 2 7.65049 2H16.3005ZM16.3005 3.5H7.65049C5.12949 3.5 3.50049 5.227 3.50049 7.899V16.051C3.50049 18.724 5.12949 20.45 7.65049 20.45H16.3005C18.8275 20.45 20.4605 18.724 20.4605 16.051V7.899C20.4605 5.227 18.8275 3.5 16.3005 3.5ZM16.9395 12.0994C16.9458 12.1045 16.952 12.1097 16.9651 12.1218L16.9844 12.1403C16.9883 12.1441 16.9926 12.1483 16.9973 12.1529L17.0531 12.2083C17.2335 12.3889 17.732 12.898 19.2175 14.4234C19.5065 14.7194 19.5015 15.1944 19.2045 15.4834C18.9085 15.7744 18.4325 15.7654 18.1435 15.4694C18.1435 15.4694 16.0945 13.3664 15.9485 13.2244C15.7935 13.0974 15.5445 13.0234 15.2995 13.0474C15.0505 13.0724 14.8265 13.1914 14.6675 13.3844C12.3435 16.2034 12.3155 16.2304 12.2775 16.2674C11.4195 17.1094 10.0345 17.0954 9.19149 16.2354C9.19149 16.2354 8.26149 15.2914 8.24549 15.2724C8.01449 15.0584 7.60249 15.0724 7.35549 15.3334L5.82549 16.9464C5.67749 17.1024 5.47949 17.1804 5.28149 17.1804C5.09549 17.1804 4.91049 17.1124 4.76549 16.9744C4.46449 16.6904 4.45249 16.2144 4.73749 15.9154L6.26549 14.3024C7.07449 13.4434 8.43949 13.4014 9.30249 14.2114L10.2605 15.1834C10.5275 15.4534 10.9615 15.4584 11.2295 15.1944C11.3305 15.0754 13.5085 12.4304 13.5085 12.4304C13.9225 11.9284 14.5065 11.6184 15.1555 11.5544C15.8055 11.4974 16.4365 11.6864 16.9395 12.0994ZM8.55869 6.6289C9.94069 6.6299 11.0637 7.7539 11.0637 9.1329C11.0637 10.5139 9.93969 11.6379 8.55869 11.6379C7.17769 11.6379 6.05469 10.5139 6.05469 9.1329C6.05469 7.7519 7.17769 6.6289 8.55869 6.6289ZM8.55769 8.1289C8.00469 8.1289 7.55469 8.5789 7.55469 9.1329C7.55469 9.6869 8.00469 10.1379 8.55869 10.1379C9.11269 10.1379 9.56369 9.6869 9.56369 9.1329C9.56369 8.5799 9.11269 8.1299 8.55769 8.1289Z"
                            fill="currentColor" />
                    </svg>
                    Travel pattern
                </button>
            </div>
        </div>
        <div class="bottom-menu">
            <form action="/admin/logout" method="post">
                @csrf
                <div class="logout-button">
                    <button class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.2294 2C10.7834 2 8.79335 3.99 8.79335 6.436V7.368C8.79335 7.782 9.12935 8.118 9.54335 8.118C9.95735 8.118 10.2934 7.782 10.2934 7.368V6.436C10.2934 4.816 11.6104 3.5 13.2294 3.5H18.1044C19.7214 3.5 21.0374 4.816 21.0374 6.436V17.565C21.0374 19.184 19.7214 20.5 18.1044 20.5H13.2184C11.6064 20.5 10.2934 19.188 10.2934 17.576V16.633C10.2934 16.219 9.95735 15.883 9.54335 15.883C9.12935 15.883 8.79335 16.219 8.79335 16.633V17.576C8.79335 20.016 10.7794 22 13.2184 22H18.1044C20.5484 22 22.5374 20.011 22.5374 17.565V6.436C22.5374 3.99 20.5484 2 18.1044 2H13.2294ZM5.14925 8.554L2.22125 11.469C2.19513 11.4949 2.17174 11.5219 2.15033 11.5504L2.22125 11.469C2.18582 11.5039 2.15431 11.5421 2.12698 11.5828C2.11494 11.6012 2.10334 11.6203 2.09258 11.6399C2.08385 11.6552 2.07582 11.6712 2.06837 11.6875C2.06206 11.7018 2.056 11.7162 2.05038 11.7308C2.04284 11.7498 2.03624 11.7693 2.03045 11.7891C2.02609 11.8047 2.02208 11.8203 2.01856 11.836C2.01409 11.8551 2.01058 11.8743 2.00781 11.8937C2.00624 11.9063 2.00471 11.9195 2.00353 11.9328C2.00124 11.9556 2.00025 11.9777 2.00025 12L2.00535 12.062L2.0074 12.1017C2.00763 12.1034 2.00787 12.1051 2.00811 12.1068L2.00025 12C2.00025 12.0555 2.0064 12.1105 2.01834 12.1639C2.02208 12.1797 2.02609 12.1953 2.03058 12.2107C2.03624 12.2307 2.04284 12.2502 2.05024 12.2695C2.056 12.2838 2.06206 12.2982 2.06855 12.3123C2.07582 12.3288 2.08385 12.3448 2.09246 12.3605C2.10334 12.3797 2.11494 12.3988 2.12735 12.4172C2.13437 12.4282 2.14207 12.439 2.15007 12.4497C2.17388 12.481 2.19982 12.5104 2.2279 12.5377L5.14925 15.447C5.29525 15.593 5.48725 15.666 5.67825 15.666C5.87025 15.666 6.06325 15.593 6.20925 15.445C6.50125 15.151 6.50025 14.677 6.20725 14.385L4.56735 12.75H14.7916C15.2056 12.75 15.5416 12.414 15.5416 12C15.5416 11.586 15.2056 11.25 14.7916 11.25H4.56535L6.20725 9.616C6.50025 9.324 6.50225 8.85 6.20925 8.556C5.91725 8.262 5.44325 8.262 5.14925 8.554Z"
                                fill="currentColor" />
                        </svg>
                        Keluar
                    </button>
                </div>
            </form>
            <div class="profile">
                <div class="profile-photo">
                    <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png" alt="">
                </div>
                <div class="">
                    <p class="name">{{ $user->name }}</p>
                    <p>{{ $user->role->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "288px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
    }
</script>
