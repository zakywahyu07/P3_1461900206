<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model {

    use HasFactory;

    protected $table = "dokter";
    protected $fillable = [
        'id',
        'nama',
        'jabatan',
    ];
    public $timestamps = false;

}