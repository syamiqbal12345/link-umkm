<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "pengguna";
	protected $fillable = ["id",'nama','nomor_ktp','kelamin','alamat','email','foto','user_id'];
}
