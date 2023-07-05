<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pemesanan::orderBy('id', 'desc')->get();
        return view('admin')->with('data', $data);
        // $user = User::all();
        // $data = pemesanan::orderBy('id', 'desc')->get();
        // return view('admin', [
        //     "data" => $data,
        //     "user" =>$user
        // ]);
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
        return view('admin')->with('data', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
    //     return view('pemesanan', [
    //         "pesan" => pemesanan::all()
    //     ]);
    // }

    // public function showbyId($id)
    // {
    //     $pemesanan = pemesanan::findOrFail($id);
    //     return view('detail-pemesanan', [
    //         "pesan" => $pemesanan
    //     ]);
    // }

    // public function show3()
    // {
    //     $id = 0;
    //     if (Auth::check()) {
    //         $id = auth::user()->id;
    //     };
    //     $pesan = pemesanan::where('id_user', $id)->latest()->paginate(3);
    //     return view('start', [
    //         "pesan" => $pesan
    //         // "pesan" => DB::table('pemesanans')->orderBy('id', 'desc')->take(3)->get()
    //     ]);

    //     $admin = admin::where('id_user', $id)->latest()->paginate(3);
    //     return view('admin', [
    //         "admin" => $admin
    //         // "pesan" => DB::table('pemesanans')->orderBy('id', 'desc')->take(3)->get()
    //     ]);
    // }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'id' => ['required'],
            'STATUS' => ['required']
        ]);

        $pemesanan = Pemesanan::find($request->id);
        $pemesanan->STATUS = $request->STATUS;
        dd($request->STATUS);
        $pemesanan->update();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pemesanan $pemesanan)
    {
        // $data = [
        //     'NAMA_PEMESANAN'=>$request->nama_pemesanan,
        //     'JUDUL' => $request->judul,
        //     'ASAL_INSTANSI' => $request->asal_instansi,
        //     'DESKRIPSI' => $request->deskripsi,
        //     'JENIS_KONTEN' => $request->jenis_konten,
        //     'id_user' => $request->id_user,
        //     'TGL_UPLOAD' => $request->tgl_upload,
        //     'MEDIA' => $request->media,
        //     'LINK_POSTER' => $request->link_poster,
        //     'JENIS_KONTEN' => $request->jenis_konten,

        // ];

        // pemesanan::where('id', $id)->update($data);
        // return redirect()->to('admin')->with('succes', 'Berhasil melakukan update data');
        // dd($pemesanan->id);
        $data = $request->validate([
            'id' => ['required'],
            'STATUS' => ['required']
        ]);
        dd($data);
        $pemesanan = Pemesanan::find($pemesanan->id);
        $pemesanan->STATUS = $request->STATUS;
        dd($request->STATUS);
        $pemesanan->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        Destinasi::find($id)->delete();
        return redirect('Destinasi')->with('statusdel', 'Data Deleted');
    }
}
