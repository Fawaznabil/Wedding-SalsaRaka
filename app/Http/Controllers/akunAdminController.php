<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use PDF;

class akunAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $data = User::orderBy('id', 'desc')->get();
        return view('akunAdmin')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('akunAdmin')->with('data', $data);
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
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'role'=>$request->role,
        // 'roleAdmin'=>$request->roleAdmin,
        ];

        $data['password']= bcrypt( $data['password']);
        User::create($data);
        $data = User::orderBy('id', 'desc')->get();
        return view('akunAdmin')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


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
    public function update(Request $request)
    {
        //    $data = $request->validate([
        //     'name' => ['required'],
        //     'role' => ['required']

        // ]);
        $pemesanan = User::find($request->id);
        $pemesanan->name = $request->name;
        $pemesanan->role = $request->role;
        // dd($request);
        $pemesanan->save();
        // User::where('id', $request->id)->update($data);

        // $data = $request->validate([
        //     'role' => ['required']
        // ]);

        // $pemesanan = User::find($request->id);
        // $pemesanan->role = $request->input('role');
        // User::where('id', $request->id)->update($data);

        // $data = $request->validate([
        //     'role' => ['required'],
        // ]);

        // $pemesanan = User::find($request->id);
        // $pemesanan->role = $request->role;
        // User::where('id', $request->id)->update($data);

        return redirect('akunAdmin')->with('statusupdate', 'Data Updated');
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
        $data = User::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('user-pdf');
        return $pdf->download('data.pdf');
    }
}
