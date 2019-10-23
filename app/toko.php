<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = "toko";
	protected $fillable = ["id",'nama','alamat','pemilik','ktp_pemilik','nomor_hp','telepon','email','pengguna_id','status'];
}
