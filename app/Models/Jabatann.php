<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatann extends Model
{
    use HasFactory;
    protected $table = "jabatan";

    protected $fillable =['id','kode','nama'];

    // memberikan akses field apa saja yang boleh dilihat
    protected $visible =['idw','kode','nama'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuata relasi one to many dengan model 
    public function Karyawan()
    {
        // model 'Author' bisa memiliki banyak data dari
        // model 'book' melalui fk 
        return $this->hasMany('App\Models\Karyawan','jabatan');
    }
}
