<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tamu;
use PDF;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = tamu::all();
        // dd($request->search1);
        //Pencarian
        // if ($request->search1) {
        //     $data = tamu::where('NAMA', 'LIKE', '%' . $request->search1 . '%')->paginate(20);
        //     // $data = tamu::where('STATUS', 'NAMA_tamu', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        // } else if ($request->SOUVENIR) {
        //     $data = tamu::where('SOUVENIR', 'LIKE', $request->SOUVENIR)->paginate(20);
        // } else if ($request->search2) {
        //     $data = tamu::where('DETAIL_ALAMAT', 'LIKE', '%' . $request->search2 . '%')->paginate(20);
        //     // $data = tamu::where('STATUS', 'NAMA_tamu', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        // } else {
        //     $data = tamu::paginate(20);
        // }

        //Banyak data
        $total = tamu::count();
        $BIASA = tamu::where('SOUVENIR','BIASA')->count();
        $VIP = tamu::where('SOUVENIR','VIP')->count();
        $VVIP = tamu::where('SOUVENIR','VVIP')->count();


        // $data = tamu::paginate(10);
        // $data = tamu::orderBy('id', 'desc')->get();
        return view('index',[
            'data'=> $data,
            'total'=> $total,
            'BIASA' =>$BIASA,
            'VIP'=>$VIP,
            'VVIP'=>$VVIP,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = tamu::orderBy('id', 'desc')->get();
        return view('index')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'NAMA'=>$request->NAMA,
            'KRITERIA_DAERAH' => $request->KRITERIA_DAERAH,
            'DETAIL_ALAMAT' => $request->DETAIL_ALAMAT,
            'KODE' => $request->KODE,
            'SOUVENIR' => $request->SOUVENIR,
        ];

        tamu::create($data);
        $data = tamu::orderBy('id', 'desc')->get();
        return view('index')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tamu::where('id', $id)->first();
        return view('edit-tamu')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = [
            'NAMA'=>$request->NAMA,
            'KRITERIA_DAERAH' => $request->KRITERIA_DAERAH,
            'DETAIL_ALAMAT' => $request->DETAIL_ALAMAT,
            'KODE' => $request->KODE,
            'SOUVENIR' => $request->SOUVENIR,
        ];

        tamu::where('id', $id)->update($data);
        return redirect()->to('admin')->with('succes', 'Berhasil melakukan update data');

        // $data = [
        //     'SOUVENIR' => $request->SOUVENIR,
        // ];

        // TAMU::where('id', $id)->update($data);
        // return redirect()->to('index')->with('succes', 'Berhasil melakukan update data');

        // $data = $request->validate([
        //     'NAMA' => $request->input('NAMA'),
        //     'KRITERIA_DAERAH' => $request->input('KRITERIA_DAERAH'),
        //     'DETAIL_ALAMAT' => $request->input('DETAIL_ALAMAT'),
        //     'KODE' => $request->input('KODE'),
        //     'SOUVENIR' => $request->input('SOUVENIR'),
        // ]);
        // // dd('asdasd');
        // $pemesanan = tamu::find($admin->id);
        // $pemesanan->SOUVENIR = $request->input('SOUVENIR');
        // // dd($request->STATUS);
        // tamu::where('id', $admin->id)->update($data);
        // return redirect('admin')->with('statusupdate', 'Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }

    public function exportpdf(){
        $data = tamu::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('user-pdf');
        return $pdf->download('data.pdf');
    }
}
