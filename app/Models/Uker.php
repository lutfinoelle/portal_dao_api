<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Uker extends Model 
{

    use HasFactory;

    protected $table = 'uker';

    protected $fillable = [
        'kode_uker',
        'nama_uker',
        'uker_induk',
        'tipe_uker',
        'kode_kanwil',
    ];

}
