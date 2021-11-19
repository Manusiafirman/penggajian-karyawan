<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantorr extends Model
{
    use HasFactory;
    protected $table = "kantor";

    protected $fillable =['kode','nama','alamat'];

    // memberikan akses field apa saja yang boleh dilihat
    protected $visible =['kode','nama','alamat'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuata relasi one to many dengan model "Book"
    public function Karyawan()
    {
        // model 'Author' bisa memiliki banyak data dari
        // model 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\Karyawan','kantorr');
    }
}
