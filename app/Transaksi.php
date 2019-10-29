<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table="transaksi";
    protected $fillable = ["pembeli_id","tanggal","status","total","kurir_id","alamat","biaya_kurir","rating"];

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class, "user_id", "id");
    }

}
