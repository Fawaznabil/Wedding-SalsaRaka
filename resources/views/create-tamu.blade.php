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
            <span>Tambah Tamu</span>
        </div>
        {{-- <span>View more &RightArrow;</span> --}}
    </a>
    <div class="card-body p-9">
                    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                        <div class="table-responsive">
                            <form action="storeTamu" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="mb-3">
                                        <label for="NAMA" style="color:black" class="form-label">Nama</label>
                                        @error('NAMA')
                                          <div class='invalid-feedback'>
                                              {{ $message }}
                                          </div>
                                        @enderror
                                        <input type="text" class="form-control"name="NAMA" @error('NAMA') is-invalid
                                        @enderror id="NAMA">
                                    </div>
                                    <div class="mb-3">
                                        <label for="KODE" style="color:black" class="form-label">Sesi</label>
                                        @error('KODE')
                                          <div class='invalid-feedback'>
                                              {{ $message }}
                                          </div>
                                        @enderror
                                        <select class="form-select" name="KODE" data-control="select2" data-placeholder="Select an option" @error('KODE') is-invalid
                                        @enderror id="KODE">
                                            <option></option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="KRITERIA_DAERAH" style="color:black" class="form-label">Kriteria Daerah</label>
                                        @error('KRITERIA_DAERAH')
                                          <div class='invalid-feedback'>
                                              {{ $message }}
                                          </div>
                                        @enderror
                                        <input type="text" class="form-control"name="KRITERIA_DAERAH" @error('KRITERIA_DAERAH') is-invalid
                                        @enderror id="KRITERIA_DAERAH">
                                    </div>
                                  <div class="mb-3">
                                      <label for="DETAIL_ALAMAT" style="color:black" class="form-label">Detail Alamat</label>
                                      @error('DETAIL_ALAMAT')
                                      <div class='invalid-feedback'>
                                          {{ $message }}
                                      </div>
                                    @enderror
                                      <input type="text" class="form-control" name="DETAIL_ALAMAT" @error('DETAIL_ALAMAT') is-invalid
                                      @enderror id="DETAIL_ALAMAT">
                                  </div>
                                  <div class="mb-3">
                                    <label for="SOUVENIR" style="color:black" class="form-label">Souvenir</label>
                                    @error('SOUVENIR')
                                      <div class='invalid-feedback'>
                                          {{ $message }}
                                      </div>
                                    @enderror
                                    <select class="form-select" name="SOUVENIR" data-control="select2" data-placeholder="Select an option" @error('SOUVENIR') is-invalid
                                    @enderror id="SOUVENIR">
                                        <option></option>
                                        <option value="BIASA">Biasa</option>
                                        <option value="VIP">VIP</option>
                                        <option value="VVIP">VVIP</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>



@endsection

