<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pemilik::all();
        return view('pemilik.index')->with('pemilik', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pemilik::all();
        return view('pemilik.tambah')->with('pemilik', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
            
        ]);
        $pemilik = new Pemilik([
            'nama_pemilik' => $request->input('nama_pemilik'),
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
        ]);
        $pemilik->save();
        return redirect('pemilik');
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
        $data = Pemilik::where('id_pemilik',"=",$id)->firstOrFail();
        return view('pemilik.edit')->with('pemilik',$data);
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
        $request->validate(['nama_pemilik'=>'required','alamat'=>'required','telp'=>'required']);
        $data = ['nama_pemilik'=>$request->nama_pemilik,'alamat'=>$request->alamat,'telp'=>$request->telp,];
        Pemilik::where('id_pemilik',$id)->update($data);
        return redirect('pemilik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pemilik::where('id_pemilik',$id)->delete();
        return redirect('pemilik');
    }
}
