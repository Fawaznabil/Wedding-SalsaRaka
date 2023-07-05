@extends('layouts.header')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-5 py-2">
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card shadow-sm">
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row g-0">

                    </div>
                </div>


            <div class="card mb-5 mb-xl-10 shadow-sm" id="kt_profile_details_view">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0" style="text-align: center">Tambah daftar Tamu</h3>
                        <div class="btn btn-link align-self-center btn-hover-scale me-5" style="margin-left: 600px; background-color:white"></div>
                    </div>
                </div>
                <div class="modal-body">
                                                    <form action='{{ url('admin/'.$data->id) }}' method="POST">
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="separator my-10"></div>

                                                        <label for="basic-url" class="form-label">Nama</label>
                                                        <div class="input-group mb-5" >
                                                            <input type="text" class="form-control" name="NAMA"
                                                                placeholder="{{ $data->NAMA }}">
                                                        </div>

                                                        <label for="basic-url" class="form-label">Kriteria Daerah <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-5">
                                                            <input type="text" class="form-control" name="KRITERIA_DAERAH"
                                                                placeholder="{{ $data->KRITERIA_DAERAH }}">
                                                        </div>

                                                        <label for="basic-url" class="form-label">Detail Alamat</label>
                                                        <div class="input-group mb-5" >
                                                            <input type="text" class="form-control" name="DETAIL_ALAMAT"
                                                                placeholder="{{ $data->NAMA }}">
                                                        </div>

                                                        <label for="basic-url" class="form-label">Sesi<span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group mb-5">
                                                            <input type="text" class="form-control" name="KODE"
                                                                placeholder="{{ $data->KRITERIA_DAERAH }}">
                                                        </div>

                                                        <label for="basic-url" class="form-label">Souvenir
                                                            <span class="text-danger">*</span></label>
                                                        <div class="input-group  mb-5" id="#status">

                                                            <input type="hidden" value="{{ $data->id }}">
                                                            <div class="input-group  mb-5">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="SOUVENIR" value="BIASA"
                                                                        @if($data->SOUVENIR === "BIASA") checked @endif />
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault">Biasa
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="input-group  mb-5">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="SOUVENIR" value="VIP" @if($data->SOUVENIR === "VIP") checked @endif />
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault">VIP
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="input-group  mb-5">
                                                                <div
                                                                    class="form-check form-check-custom form-check-solid">

                                                                    <input class="form-check-input" type="radio"
                                                                        name="SOUVENIR" value="VVIP" @if($data->SOUVENIR === "VVIP") checked @endif/>
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault"> VVIP
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="lainnya" class="row pb-5 pd-5">
                                                        </div>
                                                        <br>
                                                        <button type="button" class="btn btn-light btn-hover-scale me-5"
                                                            data-bs-dismiss="modal" style="margin-left: 520px">Tutup
                                                        </button>
                                                        <button type="submit"
                                                            class="btn btn-danger btn-hover-scale me-5">Simpan
                                                        </button>
                                                    </form>
                                                    {{-- </form> --}}
                                                </div>
                <!--end::Card body-->
            </div>
            <!--end::details View-->
        </div>
        <!--end::Container-->
    </div>

</div>
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>

@endsection
