<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potongann extends Model
{
    use HasFactory;
    protected $table = "potongan";

    protected $fillable =['kode','pengurangan'];

    // memberikan akses field apa saja yang boleh dilihat
    protected $visible =['kode','pengurangan'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuata relasi one to many dengan model "Book"
    public function Karyawanpotongan()
    {
        // model 'Author' bisa memiliki banyak data dari
        // model 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\karyawanpotongan','potongann');
    }
}