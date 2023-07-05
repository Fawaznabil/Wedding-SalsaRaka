<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tamu;
use PDF;

class inforCustomer2Controller extends Controller
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
            $data = tamu::where('SOUVENIR', 'VIP')->paginate(1000000000);
        }

        //Banyak data
        $total = tamu::count();
        $BIASA = tamu::where('SOUVENIR','VIP')->count();
        $I = tamu::where('KODE','I')->where('SOUVENIR', 'VIP')->count();
        $II = tamu::where('KODE','II')->where('SOUVENIR', 'VIP')->count();

        return view('VIP',[
            'data'=> $data,
            'total'=> $total,
            'BIASA' =>$BIASA,
            'I'=>$I,
            'II'=>$II,

        ]);
        // return view('informasiCustomer')->with('data', $data);
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
        return view('VIP')->with('data', $data);
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
        //
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
        $data = $request->validate([
            'STATUS' => ['required']
        ]);
        $tamu = tamu::find($admin->id);
        $tamu->STATUS = $request->input('STATUS');
        tamu::where('id', $admin->id)->update($data);

        return redirect('VIP')->with('statusupdate', 'Data Updated');
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

    public function exportpdf(Request $request){

         $data = tamu::where('STATUS', 'dalam antrian')->paginate(100000000000);

        // $data = tamu::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('infor1-pdf');
        return $pdf->download('data.pdf');
    }
}
