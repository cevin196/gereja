<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Keluarga;

class JemaatController extends Controller
{
    public function index()
    {
        $jemaats = Jemaat::all();
        return view('jemaat.index',compact('jemaats'));
    }


    public function create()
    {
        
        return view('jemaat.create');
    }

    public function store(Request $request)
    {
        $jemaat = new Jemaat;
        $jemaat->nama           = $request->nama;
        $jemaat->golongan_darah = $request->golongan_darah;
        $jemaat->kategori       = $request->kategori;
        $jemaat->tanggal_lahir  = $request->tanggal_lahir;
        $jemaat->alamat         = $request->nama;
        if($request->keluarga_id){
            $jemaat->keluarga_id = $request->keluarga_id;
        }else{
            $keluarga = Keluarga::firstOrCreate([
                'nama' => '-',
                'alamat' => '-',
            ]);
            $jemaat->keluarga_id = $keluarga->id;
        }
        $jemaat->save();
        return redirect(route('jemaat.index'));
    }


    public function show($id)
    {
        $jemaat = Jemaat::find($id);
        
        return view('jemaat.show',compact('jemaat'));
    }

    public function edit($id)
    {
        $jemaat = Jemaat::find($id);
        return view('jemaat.edit',compact('jemaat'));
    }

    public function update(Request $request, $id)
    {
        $jemaat                 = Jemaat::find($id);
        $jemaat->nama           = $request->nama;
        $jemaat->golongan_darah = $request->golongan_darah;
        $jemaat->kategori       = $request->kategori;
        $jemaat->tanggal_lahir  = $request->tanggal_lahir;
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
  

    public function destroy($id)
    {
        $jemaat = Jemaat::find($id);
        $jemaat->delete();
        return redirect()->back();
    }
}

