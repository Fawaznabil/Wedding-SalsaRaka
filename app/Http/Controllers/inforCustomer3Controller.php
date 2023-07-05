<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;
use PDF;

class inforCustomer3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //Pencarian
         if($request ->search1){
            $data = tamu::where('NAMA',$request->search1)->paginate(20);
        }else if($request->KODE){
            $data = tamu::where('KODE','LIKE','%'.$request->KODE.'%')->paginate(20);
        }else if($request->search2){
                $data = tamu::where('DETAIL_ALAMAT',$request->search2)->paginate(20);
       }else {
            $data = tamu::where('SOUVENIR', 'VVIP')->paginate(100000000000);
        }

        //Banyak data
        $total = tamu::count();
        $VVIP = tamu::where('SOUVENIR','VVIP')->count();
        $I = tamu::where('KODE','I')->where('SOUVENIR', 'VVIP')->count();
        $II = tamu::where('KODE','II')->where('SOUVENIR', 'VVIP')->count();

        return view('VVIP',[
            'data'=> $data,
            'total'=> $total,
            'VVIP' =>$VVIP,
            'I'=>$I,
            'II'=>$II,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'NAMA'=>$request->nama,
            'KRITERIA_DAERAH' => $request->kriteria_daerah,
            'DETAIL_ALAMAT' => $request->detail_alamat,
            'KODE' => $request->kode,
            'SOUVENIR' => $request->souvenir,
        ];

        $gambar = $request->file('Gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['Gambar'] = $gambarName;

        tamu::create($data);
        $data = tamu::orderBy('id', 'desc')->get();
        return view('VVIP')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function edit(tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tamu $tamu)
    {
        $data = $request->validate([
            'STATUS' => ['required']
        ]);
        // dd('asdasd');
        $tamu = tamu::find($admin->id);
        $tamu->STATUS = $request->input('STATUS');
        // dd($request->STATUS);
        tamu::where('id', $admin->id)->update($data);

        return redirect('VVIP')->with('statusupdate', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tamu  $tamu
     * @return \Illuminate\Http\Response
     */
    public function destroy(tamu $tamu)
    {
        //
    }

    public function exportpdf(){
        $data = tamu::where('STATUS', 'proses qc')->paginate(10);

        view()->share('data', $data);
        $pdf = PDF::loadview('user-pdf');
        return $pdf->download('data.pdf');
    }
}
