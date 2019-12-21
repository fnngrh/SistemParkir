<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tempat_Parkir;
use App\Kendaraan;
use Illuminate\Support\Facades\DB;

class TempatParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $list = DB::table('tempat_parkir')
        ->join('kendaraan', 'tempat_parkir.id_kendaraan', '=', 'kendaraan.id_kendaraan')
        ->get();

        $data = Tempat_Parkir::all();
        return view('tempat_parkir.index')->with('tempat_parkir', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Tempat_Parkir::all();
        $array = Kendaraan::all();
        return view('tempat_parkir.tambah', compact('data','array')); 
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
            'waktu_masuk'=>'required',
            'waktu_keluar'=>'required',
            
        ]);
        $tempat_parkir = new Tempat_Parkir([
            'id_kendaraan' => $request->input('no_polisi'),
            'waktu_masuk' => $request->input('waktu_masuk'),
            'waktu_keluar' => $request->input('waktu_keluar'),
            
        ]);
        $tempat_parkir->save();
        return redirect('tempat_parkir');
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
        $request->validate([
            'no_polisi'=>'required',
            'waktu_masuk'=>'required',
            'waktu_keluar'=>'required',
            
        ]);
        $data = ['no_polisi'=>$request->no_polisi,'waktu_masuk'=>$request->waktu_masuk,'waktu_keluar'=>$request->waktu_keluar,];
        Tempat_Parkir::where('id_parkir',$id)->update($data);
        
        return redirect('tempat_parkir');
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tempat_Parkir::where('id_parkir',$id)->delete();
        return redirect('tempat_parkir');
    }
}
