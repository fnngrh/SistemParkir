<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Shift::all();
        return view('shift.index')->with('shift', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =  Shift::all();
        return view('shift.tambah')->with('shift', $data);
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
            'jadwal_shift'=>'required',
            'hari'=>'required',
            'jam'=>'required',
            
        ]);
        $shift = new Shift([
            'jadwal_shift' => $request->input('jadwal_shift'),
            'hari' => $request->input('hari'),
            'jam' => $request->input('jam'),
        ]);
        $shift->save();
        return redirect('shift');
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
        $data = Shift::where('id_shift',"=",$id)->firstOrFail();
        return view('shift.edit')->with('shift',$data);
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
        $request->validate(['jadwal_shift'=>'required','hari'=>'required','jam'=>'required']);
        $data = ['jadwal_shift'=>$request->jadwal_shift,'hari'=>$request->hari,'jam'=>$request->jam,];
        Shift::where('id_shift',$id)->update($data);
        return redirect('shift');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shift::where('id_shift',$id)->delete();
        return redirect('shift');
    }
}
