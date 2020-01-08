<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $table = 'tbl_data_pegawai';
    public $timestamps = false;

    protected $fillable = ['nama', 'nip', 'jabatan', 'alamat'];

}
