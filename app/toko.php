<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $table = "toko";
	protected $fillable = ["id",'nama','alamat','pemilik','ktp_pemilik','nomor_hp','user_id','status_user'];
}
