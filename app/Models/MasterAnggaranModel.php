<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAnggaranModel extends Model
{
    //use HasFactory;
    protected $table = "Master_anggaran_models";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'mataanggaran', 'totalanggaran'];
}
