<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    
    public function periksas()
    {
        return $this->hasMany(Periksa::class);
    }

    

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class);
    }
}
