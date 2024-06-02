<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public function periksas()
    {
        return $this->hasMany(Periksa::class);
    }
    protected $table = "pasiens"; //nama table yang digunakan

    protected $fillable = [  //kolom yang dapat diisi di table pasien
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
    ];

    public function periksa()
    {
        return $this->hasMany(Periksa::class);
    }

    //non aktifin timestemps
    //public $timestamp = false;
}

