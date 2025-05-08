<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'email',
        'jenis_sekolah',
        'status_sekolah',
        'akreditasi',
        'website',
        'latitude',
        'longitude',
    ];
}
