<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAnggaranModel extends Model
{
    //use HasFactory;
    protected $table = "list_anggaran_models";
    protected $primaryKey = "id";
    protected $fillable = ['mataanggaran', 'totalanggaran','konsumsianggaran','sisaanggaran',];
}
