<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan;

class lapCustomerController extends Controller
{
    public function index(Request $request)
    {
        //Pencarian
        if($request ->search1){
            $data = pemesanan::where('NAMA_PEMESANAN',$request->search1)->paginate(10);
            // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        }else if($request->status){
            $data = pemesanan::where('STATUS','LIKE','%'.$request->status.'%')->paginate(10);
        }
        else if($request->search2){
            $data = pemesanan::where('ASAL_INSTANSI',$request->search2)->paginate(10);
            // $data = pemesanan::where('STATUS', 'NAMA_PEMESANAN', 'ASAL_INSTANSI'  .$request->search1)->paginate(5);
        }else{
            $data = pemesanan::where('STATUS', 'selesai')->paginate(10);
        }

        //Banyak data
        $total = pemesanan::count();
        $selesai = pemesanan::where('STATUS','selesai')->count();
        $dalamAntrian = pemesanan::where('STATUS','dalam antrian')->count();

        // $data = pemesanan::where('STATUS', 'dalam antrian')->orderBy('id', 'desc')->get();

        return view('laporanCustomer',[
            'data'=> $data,
            'total'=> $total,
            'selesai' =>$selesai,
            'dalamAntrian'=>$dalamAntrian
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
            'NAMA_PEMESANAN'=>$request->nama_pemesanan,
            'JUDUL' => $request->judul,
            'ASAL_INSTANSI' => $request->asal_instansi,
            'DESKRIPSI' => $request->deskripsi,
            'JENIS_KONTEN' => $request->jenis_konten,
            'id_user' => $request->id_user,
            'TGL_UPLOAD' => $request->tgl_upload,
            'MEDIA' => $request->media,
            'LINK_POSTER' => $request->link_poster,
            'JENIS_KONTEN' => $request->jenis_konten,
        ];

        $gambar = $request->file('Gambar');
        $gambarFolder = 'gambar_folder';
        $gambarName = $gambar->getClientOriginalName();
        $gambar->move($gambarFolder, $gambarName);
        $data['Gambar'] = $gambarName;

        pemesanan::create($data);
        $data = pemesanan::orderBy('id', 'desc')->get();
        return view('laporanCustomer')->with('data', $data);
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
        // dd('asdasd');
        $pemesanan = pemesanan::find($admin->id);
        $pemesanan->STATUS = $request->input('STATUS');
        // dd($request->STATUS);
        pemesanan::where('id', $admin->id)->update($data);

        return redirect('laporanCustomer')->with('statusupdate', 'Data Updated');
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

        $data = pemesanan::where('STATUS', 'selesai')->paginate(10);

       // $data = pemesanan::all();

       view()->share('data', $data);
       $pdf = PDF::loadview('infor1-pdf');
       return $pdf->download('data.pdf');
   }
}
