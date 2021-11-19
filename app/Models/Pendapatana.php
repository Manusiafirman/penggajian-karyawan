<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatana extends Model
{
    use HasFactory;
    protected $table = "pendapatan";

    protected $fillable =['kode','tunjangan'];

    // memberikan akses field apa saja yang boleh dilihat
    protected $visible =['kode','tunjangan'];

    // mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    // membuata relasi one to many dengan model "Book"
    public function Karyawanpendapatan()
    {
        // model 'Author' bisa memiliki banyak data dari
        // model 'book' melalui fk 'author_id'
        return $this->hasMany('App\Models\karyawanpendapatan','pendapatan');
    }
}
