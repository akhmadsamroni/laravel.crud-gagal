<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    public $timestamps = false;
    protected $primarykey ='id_siswa';
}
