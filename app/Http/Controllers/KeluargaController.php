<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;

class KeluargaController extends Controller
{

    public function index()
    {      
        $keluargas = Keluarga::all();
        
        return view('keluarga.index',compact('keluargas'));
    }


    public function create()
    {
        return view('keluarga.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
        ]);

        $keluarga = new Keluarga;
        $keluarga->nama           = $request->nama;       
        $keluarga->alamat         = $request->alamat;        
        $keluarga->save();
        return redirect(route('keluarga.edit',$keluarga->id));
    }

    public function show($id)
    {
        $keluarga = Keluarga::find($id);
        
        return view('keluarga.show',compact('keluarga'));
    }

    public function edit($id)
    {
        $keluarga   = Keluarga::find($id);
        $jemaat     = Keluarga::where('nama','-')->first();
        return view('keluarga.edit',compact('keluarga'));        
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
        ]);

        $keluarga =  Keluarga::find($id);
        $keluarga->nama           = $request->nama;       
        $keluarga->alamat         = $request->alamat;        
        $keluarga->update();
        return redirect(route('keluarga.index'));
    }

    public function destroy($id)
    {
        $keluarga = Keluarga::find($id);
        $keluarga->delete();
        return redirect()->back();
    }
}
