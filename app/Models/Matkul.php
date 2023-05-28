<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkul';
    protected $fillable = ['nama_mk', 'kode_mk', 'sks'];

    public function dosen()
    {
        return $this->hasMany('App\Models\Dosen');
    }

    public function matkul()
    {
        return $this->belongsTo('App\Models\Matkul');
    }

}