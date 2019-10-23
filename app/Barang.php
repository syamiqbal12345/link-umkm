<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
	protected $fillable = ["id",'nama','katagori_id','harga','toko_id','foto'];
}
