<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Keluarga;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jemaats = Jemaat::all();
        return view('jemaat.index',compact('jemaats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('jemaat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jemaat = new Jemaat;
        $jemaat->nama           = $request->nama;
        $jemaat->golongan_darah = $request->golongan_darah;
        $jemaat->kategori       = $request->kategori;
        $jemaat->alamat         = $request->nama;
        if($request->keluarga_id){
            $jemaat->keluarga_id = $request->keluarga_id;
        }else{
            $keluarga = Keluarga::firstOrCreate([
                'nama' => '-',
                'alamat' => '',
            ]);
            $jemaat->keluarga_id = $keluarga->id;
        }
        $jemaat->save();
        return redirect(route('jemaat.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jemaat = Jemaat::find($id);
        
        return view('jemaat.show',compact('jemaat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jemaat = Jemaat::find($id);
        return view('jemaat.edit',compact('jemaat'));
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
        $jemaat                 = Jemaat::find($id);
        $jemaat->nama           = $request->nama;
        $jemaat->golongan_darah = $request->golongan_darah;
        $jemaat->kategori       = $request->kategori;
        $jemaat->alamat         = $request->nama;
        if($request->keluarga_id){
            $jemaat->keluarga_id = $request->keluarga_id;
        }else{
            $keluarga = Keluarga::firstOrCreate([
                'nama' => '-',
                'alamat' => '',
            ]);
            $jemaat->keluarga_id = $keluarga->id;
        }
        $jemaat->update();
        return redirect(route('jemaat.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jemaat = Jemaat::find($id);
        $jemaat->delete();
        return redirect()->back();
    }
}

