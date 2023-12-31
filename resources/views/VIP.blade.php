@extends('layouts.header')

@section('content')
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
            <span>Jumlah Tamu Souvenir VIP</span>
        </div>
        {{-- <span>View more &RightArrow;</span> --}}
    </a>
    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Souvenir VIP
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $BIASA }}
                </p>
            </div>
        </div>

        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Souvenir VIP Sesi I
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $I }}
                </p>
            </div>
        </div>

        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Souvenir VIP Sesi II
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{ $II }}
                </p>
            </div>
        </div>
    </div>


    <!-- New Table -->
    <div iv class="w-full overflow-hidden rounded-lg shadow-xs" style="margin-top: 40px">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap" id="myTable" class="display">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Kriteria Daerah</th>
                        <th class="px-4 py-3">Detail Alamat</th>
                        <th class="px-4 py-3">Kode</th>
                        <th class="px-4 py-3">Souvenir</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($data as $item )

        <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div>
                        <p class="font-semibold">{{$item->NAMA}}</p>

                    </div>
                </div>
            </td>
            <td class="px-4 py-3 text-sm">
            {{$item->KRITERIA_DAERAH}}
            </td>
            <td class="px-4 py-3 text-xs">
            {{$item->DETAIL_ALAMAT}}
            </td>
            <td class="px-4 py-3 text-sm">
            {{$item->KODE}}
            </td>
            <td class="px-4 py-3 text-sm">
            {{$item->SOUVENIR}}
            </td>
        </tr>

                        @endforeach
        </tbody>
        </table>
    </div>
    </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endsection