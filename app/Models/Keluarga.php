<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jemaat;

class Keluarga extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat'];
    public function jemaats(){
        return $this->hasMany(Jemaat::class);
    }
}
