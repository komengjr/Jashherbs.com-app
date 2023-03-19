<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan_barang extends Model
{
    protected $table = 'tbl_item';
    protected $fillable = ['kd_item','kd_cat', 'nama_item','harga_item','deskripsi_item','status_item','file_barang'];
}
