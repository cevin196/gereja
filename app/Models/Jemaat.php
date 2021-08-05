<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Keluarga;
class Jemaat extends Model
{
    use HasFactory;

    public function keluargas(){
        return $this->belongsTo(Keluarga::class);
    }
}
