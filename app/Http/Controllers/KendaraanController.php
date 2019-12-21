<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kendaraan;
use App\Pemilik;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('kendaraan')
        ->join('pemilik', 'kendaraan.id_pemilik', '=', 'pemilik.id_pemilik')
        ->get();


        $data = Kendaraan::all();
        return view('kendaraan.index')->with('kendaraan', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =  Kendaraan::all();
        $array = Pemilik::all();
        
        return view('kendaraan.tambah',compact('data','array'));

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
            'no_polisi'=>'required',
            'nama_kendaraan'=>'required',
            'nama_pemilik'=>'required',
            'jenis_kendaraan'=>'required'
        ]);
        $kendaraan = new Kendaraan([
            'no_polisi' => $request->input('no_polisi'),
            'nama_kendaraan' => $request->input('nama_kendaraan'),
            'id_pemilik' => $request->input('nama_pemilik'),
            'jenis_kendaraan' => $request->input('jenis_kendaraan')
        ]);
        $kendaraan->save();
        return redirect('kendaraan');
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
        $data = Kendaraan::where('id_kendaraan',"=",$id)->firstOrFail();
        return view('kendaraan.edit')->with('kendaraan',$data);
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
        $request->validate(['no_polisi'=>'required','nama_kendaraan'=>'required','jenis_kendaraan'=>'required']);
        $data = ['no_polisi'=>$request->no_polisi,'nama_kendaraan'=>$request->nama_kendaraan,'jenis_kendaraan'=>$request->jenis_kendaraan];
        Kendaraan::where('id_kendaraan',$id)->update($data);
        return redirect('kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kendaraan::where('id_kendaraan',$id)->delete();
        return redirect('kendaraan');
    }
}
