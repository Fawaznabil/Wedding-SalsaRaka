@extends('layouts.header')

@section('content')

        <link href="{{ asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">

    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        {{-- href="https://github.com/estevanmaito/windmill-dashboard" --}}>
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Edit Tamu</span>
        </div>
        {{-- <span>View more &RightArrow;</span> --}}
    </a>
    <div class="modal-body">
                                                    <form action='{{ url('admin/'.$data->id) }}' method="POST">
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="separator my-10"></div>

                                                        <label for="basic-url" class="form-label">Nama</label>
                                                        <div class="input-group mb-5" >
                                                            <input type="text" class="form-control" name="NAMA"
                                                                value="{{ $data->NAMA }}" >
                                                        </div>

                                                        <label for="basic-url" class="form-label">Kriteria Daerah</label>
                                                        <div class="input-group mb-5">
                                                            <input type="text" class="form-control" name="KRITERIA_DAERAH"
                                                                value="{{ $data->KRITERIA_DAERAH }}" >
                                                        </div>

                                                        <label for="basic-url" class="form-label">Detail Alamat</label>
                                                        <div class="input-group mb-5" >
                                                            <input type="text" class="form-control" name="DETAIL_ALAMAT"
                                                                value="{{ $data->DETAIL_ALAMAT }}">
                                                        </div>

                                                        <label for="basic-url" class="form-label">Sesi</label>
                                                        <div class="input-group mb-5">
                                                            <select class="form-select" name="KODE" data-control="select2" data-placeholder="Select an option" @error('KODE') is-invalid
                                                            @enderror id="KODE">
                                                                <option value="I" {{ $data->KODE == 'I' ? 'selected' : '' }}>I</option>
                                                                <option value="II" {{ $data->KODE == 'II' ? 'selected' : '' }}>II</option>
                                                            </select>
                                                        </div>

                                                        <label for="basic-url" class="form-label">Souvenir</label>
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
                                                        <!-- <button type="button" class="btn btn-light btn-hover-scale me-5"
                                                            data-bs-dismiss="modal" style="margin-bottom: 50px;">Tutup
                                                        </button> -->
                                                        <button type="submit"
                                                            class="btn btn-danger btn-hover-scale me-5" style="margin-bottom: 50px; background-color:brown">Simpan
                                                        </button>
                                                    </form>
                                                    {{-- </form> --}}
                                                </div>



@endsection

