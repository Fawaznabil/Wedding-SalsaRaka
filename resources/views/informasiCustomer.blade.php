@extends('layouts.app')

@section('content')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">



                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row g-0">


                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="/informasiCustomer" class="text-danger fw-bold fs-1">{{ $BIASA }}</a><br>
                                            <a href="/informasiCustomer" class="text-danger  fs-6">Souvenir Biasa</a>
                                        </div>

                                        <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="/laporanCustomer" class="text-success fw-bold fs-1">{{ $I }}</a><br>
                                            <a href="/laporanCustomer" class="text-success  fs-6">Biasa Sesi I</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 me-7 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z"
                                                        fill="black" />
                                                    <path opacity="0.3"
                                                        d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="/informasiCustomer" class="text-danger fw-bold fs-1">{{ $II }}</a><br>
                                            <a href="/informasiCustomer" class="text-danger  fs-6">Biasa Sesi II</a>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0">Pencarian</h3>
                                        </div>
                                    </div>

                                    <div class="card-body" id="searchInput">
                                         <form action="/informasiCustomer" method="GET">
                                        <div class="row gy-5 g-xl-8">
                                            <div class="col-xl-4">
                                                <label for="basic-url" class="form-label">Sesi</label>
                                                <div class="input-group mb-5">
                                                    <select class="form-select" name="KODE" data-control="select2"
                                                        data-placeholder="Pilih Sesi">
                                                        <option></option>

                                                        <option value="I">I</option>
                                                        <option value="II">II</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="basic-url" class="form-label">Nama</label>
                                                <div class="input-group  mb-5"><input type="search" class="form-control" name="search1" >
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="basic-url" class="form-label">Detail Alamat</label>
                                                <div class="input-group  mb-5"><input type="search" class="form-control" name="search2" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-hover-scale me-5">Cari</button>
                                        </form>
                                    </div>
                                </div> <br>

                            <!--begin::details View-->
                            <div class="card mb-5 mb-xl-10 shadow-sm" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0">Informasi Souvenir Biasa</h3>
                                    </div>
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
                                                        <th>Nama</th>
                                                        <th>Kriteria Daerah</th>
                                                        <th >Detail Alamat</th>
                                                        <th>Kode</th>
                                                        <th>Souvenir</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item )
                                                    <tr>
                                                        <td id="list">{{$item->NAMA}}</td>
                                                        <td id="list">{{$item->KRITERIA_DAERAH}}</td>
                                                        <td  id="list">{{$item->DETAIL_ALAMAT}}</td>
                                                        <td id="list">{{$item->KODE}}</td>
                                                        <td id="list">{{$item->SOUVENIR}}</td>

                                                    </tr>

                                                    <!--begin::modalUbah-->
                                                    <div class="modal fade" tabindex="-1" id="modalUbah{{ $item->id }}">
                                                        <div class="modal-dialog modal-centered modal-lg">
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
                                            <div class="align-items-center justify-content-center justify-content-md-end">
                                                <ul class="pagination justify-content-end">
                                                    {{ $data->links() }}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

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
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
@endsection
