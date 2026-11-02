<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StafApotek extends Model
{
    protected $fillable = ['id_staff', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'no_hp'];
}
