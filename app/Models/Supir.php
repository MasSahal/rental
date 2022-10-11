<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    public $table = "supir";

    protected $fillable = [
        "supir_id",
        "kd_supir",
        "nm_supir",
        "nohp",
        "gender",
        "alamat",
        "ket",
    ];
}
