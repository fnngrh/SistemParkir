<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Karyawan;
use App\Shift;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('karyawan')
        ->join('shift', 'karyawan.id_shift', '=', 'shift.id_shift')
        ->get();

        $data = Karyawan::all();
        return view('karyawan.index')->with('karyawan', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Shift::all();
        return view('karyawan.tambah')->with('shift', $data);
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
            'nama_karyawan'=>'required',
            'lokasi_pos'=>'required',
            'jadwal_shift'=>'required',
        ]);
        $karyawan = new Karyawan([
            'nama_karyawan' => $request->input('nama_karyawan'),
            'lokasi_pos' => $request->input('lokasi_pos'),
            'id_shift' => $request->input('jadwal_shift'),
        ]);
        $karyawan->save();
        return redirect('karyawan');
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
        $data = Karyawan::where('id_karyawan',"=",$id)->firstOrFail();
        return view('karyawan.edit')->with('karyawan',$data);
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
        $request->validate([
            'nama_karyawan'=>'required',
            'lokasi_pos'=>'required',
            
        ]);

        $data = ['nama_karyawan'=>$request->nama_karyawan,'lokasi_pos'=>$request->lokasi_pos,];
        Karyawan::where('id_karyawan',$id)->update($data);
        return redirect('karyawan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::where('id_karyawan',$id)->delete();
        return redirect('karyawan');
    }
}
