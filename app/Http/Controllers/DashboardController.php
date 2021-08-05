<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jemaat;
use App\Models\Keuangan;
use App\Models\Keluarga;

class DashboardController extends Controller
{

    public function index(){
        $keuangans = Keuangan::whereYear('bulan_tahun',date('Y'))->whereMonth('bulan_tahun',date('m'))->get();        
        $totalKas = 0;
        foreach($keuangans as $keuangan){
            $totalKas += $keuangan->gereja + $keuangan->musik + $keuangan->pemuda + $keuangan->lainnya;
        }
        $totalKas = strrev(chunk_split(strrev($totalKas), 3, '.'));
        $totalKeluarga = Keluarga::count();
        $jumlahJemaat = Jemaat::count();
        return view('dashboard',compact('jumlahJemaat','totalKas','totalKeluarga'));
    }
}
