<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Keluarga;
use App\Models\Jemaat;

class AnggotaKeluarga extends Component
{
    public $jemaatKosong, $keluargaId, $keluarga, $idTambahAnggota;
    
        
    public function render()
    {
        $this->keluarga= Keluarga::find($this->keluargaId);
        $this->jemaatKosong= Keluarga::firstOrCreate([
            'nama' => '-',
            'alamat' => '-',
        ]);
        
        return view('livewire.anggota-keluarga');
    }

    public function updateJemaat($jemaatId){
        $jemaat = Jemaat::find($jemaatId);
        $jemaat->keluarga_id = $this->jemaatKosong->id;
        $jemaat->update();
        $this->render();
    }

    public function tambahKeluarga($jemaatId){
        $jemaat = Jemaat::find($jemaatId);
        $jemaat->keluarga_id = $this->keluargaId;
        $jemaat->update();
        $this->render();
    }

}
