<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../" />
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-7" id="kt_aside_menu">
                    <!--begin::Aside Menu-->
                    <div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer, #kt_header"
                        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper"
                        data-kt-scroll-offset="102">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-rounded fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item">
                                <a class="menu-link " href="/admin">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Beranda</span>
                                </a>
                            </div>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                    fill="black" />
                                                <path
                                                    d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                    fill="black" />
                                                <path
                                                    d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Transaksi</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="/akunAdmin">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Akun</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                    fill="black" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Informasi</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="/informasiCustomer">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Dalam Antrian</span>
                                            </a>
                                            <a class="menu-link" href="/informasiCustomer2">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Proses Pengerjaan</span>
                                            </a>
                                            <a class="menu-link" href="/informasiCustomer3">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Proses qc</span>
                                            </a>
                                            <a class="menu-link" href="/informasiCustomer4">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Selesai</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M13.0021 10.9128V3.01281C13.0021 2.41281 13.5021 1.91281 14.1021 2.01281C16.1021 2.21281 17.9021 3.11284 19.3021 4.61284C20.7021 6.01284 21.6021 7.91285 21.9021 9.81285C22.0021 10.4129 21.5021 10.9128 20.9021 10.9128H13.0021Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M11.0021 13.7128V4.91283C11.0021 4.31283 10.5021 3.81283 9.90208 3.91283C5.40208 4.51283 1.90209 8.41284 2.00209 13.1128C2.10209 18.0128 6.40208 22.0128 11.3021 21.9128C13.1021 21.8128 14.7021 21.3128 16.0021 20.4128C16.5021 20.1128 16.6021 19.3128 16.1021 18.9128L11.0021 13.7128Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M21.9021 14.0128C21.7021 15.6128 21.1021 17.1128 20.1021 18.4128C19.7021 18.9128 19.0021 18.9128 18.6021 18.5128L13.0021 12.9128H20.9021C21.5021 12.9128 22.0021 13.4128 21.9021 14.0128Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Laporan</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="/laporanCustomer">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Data Customer</span>
                                            </a>


                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->

            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-bg">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Brand-->
                        <div class="header-brand me-5">
                            <!--begin::Aside toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Aside toggle-->
                            <!--begin::Logo-->
                            <a href="#">
                                <img alt="Logo" src="{{ asset('assets/mitra-pink.png') }}"
                                    class="h-55px h-lg-70px d-none d-md-block" />
                                <img alt="Logo" src="{{ asset('assets/mitra-pink.png') }}"
                                    class="h-45px d-block d-md-none" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Topbar-->
                        <div class="topbar d-flex align-items-stretch">

                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-2 me-lg-4">
                                {{-- <a href="#"
                                    class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10 position-relative"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Pemberitahuan">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
                                                fill="black" />
                                            <path
                                                d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-100 animation-blink"></span>
                                </a> --}}
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    {{-- <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                        style="background-image:url('dist/assets/media/misc/pattern-1.jpg')">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-bold px-9 mt-10 mb-6">Pemberitahuan
                                            <span class="fs-8 opacity-75 ps-3">24 Pemberitahuan</span>
                                        </h3>
                                        <!--end::Title-->

                                    </div> --}}
                                    <!--end::Heading-->
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_1"
                                            role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                                Alice</a>
                                                            <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 hr</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->






                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="../pemberitahuan.php" target="_blank"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">Lihat semua
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->


                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-2 me-lg-4">
                                <a href="#"
                                    class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10 "
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Profil">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                fill="black" />
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="../images/user1.PNG" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div
                                                    class="fw-bolder text-hover-primary d-flex align-items-center fs-6">
                                                    Anisa, S.Kom., M.Kom.
                                                </div>
                                                <div class="fw-bold text-muted text-hover-primary fs-8">
                                                    199507172019032017</div>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../dataPribadi.php" class="menu-link px-5">Detail Profil</a>

                                    </div>
                                    <!--end::Menu item-->









                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-2 me-lg-4">
                                <a href="../bantuan.php" target="_blank"
                                    class="btn btn-icon btn-borderless btn-active-primary bg-white bg-opacity-10"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bantuan">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen046.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-white"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <path
                                                d="M11.276 13.654C11.276 13.2713 11.3367 12.9447 11.458 12.674C11.5887 12.394 11.738 12.1653 11.906 11.988C12.0833 11.8107 12.3167 11.61 12.606 11.386C12.942 11.1247 13.1893 10.896 13.348 10.7C13.5067 10.4947 13.586 10.2427 13.586 9.944C13.586 9.636 13.4833 9.356 13.278 9.104C13.082 8.84267 12.69 8.712 12.102 8.712C11.486 8.712 11.066 8.866 10.842 9.174C10.6273 9.482 10.52 9.82267 10.52 10.196L10.534 10.574H8.826C8.78867 10.3967 8.77 10.2333 8.77 10.084C8.77 9.552 8.90067 9.07133 9.162 8.642C9.42333 8.20333 9.81067 7.858 10.324 7.606C10.8467 7.354 11.4813 7.228 12.228 7.228C13.1987 7.228 13.9687 7.44733 14.538 7.886C15.1073 8.31533 15.392 8.92667 15.392 9.72C15.392 10.168 15.322 10.5507 15.182 10.868C15.042 11.1853 14.874 11.442 14.678 11.638C14.482 11.834 14.2253 12.0533 13.908 12.296C13.544 12.576 13.2733 12.8233 13.096 13.038C12.928 13.2527 12.844 13.528 12.844 13.864V14.326H11.276V13.654ZM11.192 15.222H12.928V17H11.192V15.222Z"
                                                fill="black" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </a>

                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-2 me-lg-4">
                                <a href="../index.php"
                                    class="btn btn-success border-0 px-3 px-lg-6 btn-hover-scale me-5"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Keluar dari Aplikasi">Keluar</a>
                            </div>
                            <!--end::Item-->

                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->

                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">

                            <div class="card shadow-sm">


                            <!--begin::details View-->
                            <div class="card mb-5 mb-xl-10 shadow-sm" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0">Laporan Customer</h3>
                                        <div class="card-footer">
                                            <a href="/exportpdf4" class="btn btn-info btn-hover-scale me-1" style="margin-right: 30px">Export pdf</a>

                                        </div>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Action-->


                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-hover table-rounded table-striped border gy-7 gs-7 cssTable">
                                                <thead>
                                                    <tr
                                                        class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Asal Instansi</th>
                                                        <th>Tanggal Upload</th>
                                                        <th>Link Poster</th>
                                                        <th>Link Konten</th>
                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item )


                                                    <tr>

                                                        <td>PN{{$item->id}}</td>
                                                        {{-- @foreach ($user->where('id', $item->id_user) as $nama)@endforeach --}}
                                                        <td>{{$item->NAMA_PEMESANAN }}</td>
                                                        <td>{{$item->ASAL_INSTANSI}}</td>
                                                        <td>{{$item->TGL_UPLOAD}}</td>
                                                        <td><a href="{{$item->LINK_POSTER}}" target="_BLANK">{{$item->LINK_POSTER}}</a></td>
                                                        <td><a href="{{$item->LINK_KONTEN}}" target="_BLANK">{{$item->LINK_KONTEN}}</a></td>

                                                        <td><span class="badge badge-success">{{ $item->STATUS }}</span>
                                                        </td>

                                                    </tr>

                                                    <!--begin::modalUbah-->
                                                    <div class="modal fade" tabindex="-1" id="modalUbah{{ $item->id }}">
                                                        <div class="modal-dialog modal-fullscreen">
                                                            <div class="modal-content shadow-none">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title">Ubah Master Level</h3>

                                                                    <!--begin::Close-->
                                                                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2 btn-hover-scale me-5"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <span class="svg-icon svg-icon-2x"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z"
                                                                                    fill="black" />
                                                                            </svg></span>
                                                                    </div>
                                                                    <!--end::Close-->
                                                                </div>

                                                                <div class="modal-body">
                                                                    <!--begin::Notice-->
                                                                    <div
                                                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.3" x="2" y="2"
                                                                                    width="20" height="20" rx="10"
                                                                                    fill="black" />
                                                                                <rect x="11" y="14" width="7" height="2"
                                                                                    rx="1" transform="rotate(-90 11 14)"
                                                                                    fill="black" />
                                                                                <rect x="11" y="17" width="2" height="2"
                                                                                    rx="1" transform="rotate(-90 11 17)"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">
                                                                                    Perhatian!</h4>
                                                                                <div class="fs-6 text-gray-700">Kolom
                                                                                    pengisian dengan tanda bintang *
                                                                                    berwarna merah adalah wajib diisi.
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <div class="separator my-10"></div>






                                                                    {{-- <form action='{{ url('admin/'.$data->id) }}'
                                                                    method='post'>
                                                                    @csrf
                                                                    @method('PUT') --}}

                                                                    <label for="basic-url"
                                                                        class="form-label">Nama</label>
                                                                    <div class="input-group mb-5">

                                                                        <input type="text" class="form-control" disabled
                                                                            placeholder="{{ $item->NAMA_PEMESANAN }}">
                                                                    </div>


                                                                    <label for="basic-url" class="form-label">Asal
                                                                        Instansi <span
                                                                            class="text-danger">*</span></label>
                                                                    <div class="input-group mb-5">
                                                                        <input type="text" class="form-control" disabled
                                                                            placeholder="{{ $item->ASAL_INSTANSI }}">
                                                                    </div>

                                                                    {{-- <label for="basic-url" class="form-label">Link Drive <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control">
                                    </div> --}}





                                                                    <label for="basic-url" class="form-label">Status
                                                                        <span class="text-danger">*</span></label>
                                                                    <div class="input-group  mb-5" id="#status">
                                                                    <form action="admin/{{ $item->id }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" value="{{ $item->id }}">
                                                                        <div class="input-group  mb-5">
                                                                            <div class="form-check form-check-custom form-check-solid">

                                                                                <input class="form-check-input"
                                                                                    type="radio" name="STATUS"
                                                                                    value="Dalam Antrian" />
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault">Dalam Antrian
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group  mb-5">
                                                                            <div
                                                                                class="form-check form-check-custom form-check-solid">

                                                                                <input class="form-check-input"
                                                                                    type="radio" name="STATUS"
                                                                                    value="Proses
                                                                                    Pengerjaan" />
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault"> Proses
                                                                                    Pengerjaan
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="input-group  mb-5">
                                                                            <div
                                                                                class="form-check form-check-custom form-check-solid">

                                                                                <input class="form-check-input"
                                                                                    type="radio" name="STATUS"
                                                                                    value="Proses qc" />
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault"> Proses qc
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="input-group  mb-5">
                                                                            <div
                                                                                class="form-check form-check-custom form-check-solid">

                                                                                <input class="form-check-input"
                                                                                    type="radio" name="STATUS"
                                                                                    value="selesai" />
                                                                                <label class="form-check-label"
                                                                                    for="flexRadioDefault"> selesai
                                                                                </label>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <button type="button"
                                                                        class="btn btn-light btn-hover-scale me-5"
                                                                        data-bs-dismiss="modal">Tutup
                                                                    </button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-hover-scale me-5">Simpan
                                                                    </button>
                                                                </form>
                                                                    {{-- </form> --}}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::modalUbah-->
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                                                <div class="dataTables_length">

                                                </div>
                                                <div class="dataTables_info">Menampilkan 10 dari {{ $total }} data</div>
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-end">

                                                <ul class="pagination justify-content-end">
                                                   {{ $data->links() }}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::details View-->












                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->

                    <!--begin::modalTambah-->
                    <div class="modal fade" tabindex="-1" id="modalTambah">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content shadow-none">
                                <div class="modal-header">
                                    <h3 class="modal-title">Tambah Master Level</h3>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2 btn-hover-scale me-5"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z"
                                                    fill="black" />
                                                <path
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z"
                                                    fill="black" />
                                            </svg></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body">
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                    fill="black" />
                                                <rect x="11" y="14" width="7" height="2" rx="1"
                                                    transform="rotate(-90 11 14)" fill="black" />
                                                <rect x="11" y="17" width="2" height="2" rx="1"
                                                    transform="rotate(-90 11 17)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Perhatian!</h4>
                                                <div class="fs-6 text-gray-700">Kolom pengisian dengan tanda bintang *)
                                                    berwarna merah adalah wajib diisi.
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <div class="separator my-10"></div>










                                    <label for="basic-url" class="form-label">Level <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control">
                                    </div>

                                    <label for="basic-url" class="form-label">Keterangan <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control">
                                    </div>





                                    <label for="basic-url" class="form-label">Status <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group  mb-5">

                                        <div class="input-group  mb-5">
                                            <div class="form-check form-check-custom form-check-solid">

                                                <input class="form-check-input" type="radio" name="status"
                                                    checked="checked" value="advanced" />
                                                <label class="form-check-label" for="flexRadioDefault">Dalam Antrian
                                                </label>
                                            </div>
                                        </div>
                                        <div class="input-group  mb-5">
                                            <div class="form-check form-check-custom form-check-solid">

                                                <input class="form-check-input" type="radio" name="status"
                                                    checked="checked" value="advanced" />
                                                <label class="form-check-label" for="flexRadioDefault"> Proses
                                                    Pengerjaan
                                                </label>
                                            </div>

                                        </div>
                                        <div class="input-group  mb-5">
                                            <div class="form-check form-check-custom form-check-solid">

                                                <input class="form-check-input" type="radio" name="status"
                                                    checked="checked" value="advanced" />
                                                <label class="form-check-label" for="flexRadioDefault"> Proses qc
                                                </label>
                                            </div>

                                        </div>
                                        <div class="input-group  mb-5">
                                            <div class="form-check form-check-custom form-check-solid">

                                                <input class="form-check-input" type="radio" name="status"
                                                    checked="checked" value="advanced" />
                                                <label class="form-check-label" for="flexRadioDefault"> selesai
                                                </label>
                                            </div>

                                        </div>
                                    </div>





                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light btn-hover-scale me-5"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" id="sa_tambah"
                                        class="btn btn-danger btn-hover-scale me-5">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end::modalTambah-->


                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright ITKI RSDS-->
                        <div
                            class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                            <div class="text-dark-50 font-size-lg font-weight-bolder" style="margin: 0 auto;">
                                <span class="mr-1"><strong>&#169;2023</strong></span> BEM VOKASI UNIVERSITAS AIRLANGGA
                                <a href="https://rsudrsoetomo.jatimprov.go.id/" target="_blank"
                                    class="text-dark-75 text-hover-primary">UNIVERSITAS AIRLANGGA</a>
                            </div>
                        </div>
                        <!--end::Copyright ITKI RSDS-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->



    <script>
        var hostUrl = "assets/";

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('js/plugins.bundle.js') }}"></script>
    <script src="{{ asset('js/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('js/datatables1.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('js/js/custom/pages/user-profile/general.js') }}"></script>
    <script src="{{ asset('js/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('js/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('js/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('js/js/js/custom/utilities/modals/users-search.js') }}"></script>

    <!--end::Page Custom Javascript-->

    <script>
        $('#status').on('change',function(){
            if($(this).val()=='selesai'){
                $('#lainnya').html(`<div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Masukkan Faktor">
                                                </div>`);
            }else{
                $('#lainnya').html('');
            }
        }); 
    </script>

    <script>
        const button = document.getElementById('sa_tambah');

        button.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Selesai",
                customClass: {
                    confirmButton: "btn btn-success"
                }
            }).then(function (result) {
                window.location.reload(); // Submit form

            });
        });

    </script>
    <script>
        const button2 = document.getElementById('sa_ubah');

        button2.addEventListener('click', e2 => {
            e2.preventDefault();

            Swal.fire({
                text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Selesai",
                customClass: {
                    confirmButton: "btn btn-success"
                }
            }).then(function (result) {
                window.location.reload(); // Submit form

            });
        });

    </script>
    <!--end::Javascript-->
</body>



<script>
    var hostUrl = "assets/";

</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('js/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('js/datatables1.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('js/js/custom/pages/user-profile/general.js') }}"></script>
<script src="{{ asset('js/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('js/js/custom/widgets.js') }}"></script>
<script src="{{ asset('js/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/create-campaign.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
<script src="{{ asset('js/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
<script src="{{ asset('js/js/js/custom/utilities/modals/users-search.js') }}"></script>

<!--end::Page Custom Javascript-->

<script>
    $('#status').on('change',function(){
        if($(this).val()=='selesai'){
            $('#lainnya').html(`<div class="input-group mb-5">
                                <input type="text" class="form-control" placeholder="Masukkan Faktor">
                                            </div>`);
        }else{
            $('#lainnya').html('');
        }
    }); 
</script>

<script>
    const button = document.getElementById('sa_tambah');

    button.addEventListener('click', e => {
        e.preventDefault();

        Swal.fire({
            text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Selesai",
            customClass: {
                confirmButton: "btn btn-success"
            }
        }).then(function (result) {
            window.location.reload(); // Submit form

        });
    });

</script>
<script>
    const button2 = document.getElementById('sa_ubah');

    button2.addEventListener('click', e2 => {
        e2.preventDefault();

        Swal.fire({
            text: "Data sukses tersimpan pada 23 Januari 2022 13:09:08.",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Selesai",
            customClass: {
                confirmButton: "btn btn-success"
            }
        }).then(function (result) {
            window.location.reload(); // Submit form

        });
    });

</script>
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
