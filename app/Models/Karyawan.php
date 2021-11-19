<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{

    use HasFactory;
    protected $table = "karyawan";
    protected $fillable = ['nik','nama_depan','nama_belakang', 'jenis_kelamin', 'jabatan', 'kantor', 'agama',
                            'pendidikan', 'alamat', 'avatar', 'gaji',];
    protected $visible =['nik','nama_depan','nama_belakang', 'jenis_kelamin', 'jabatan', 'kantor', 'agama',
                            'pendidikan', 'alamat', 'avatar', 'gaji'];
    public $timestamps = true;

    // membuat relasi one to many
    public function jabatan()
    {
        // data model 'Book' bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Jabatann','jabatan');
    }

    public function kantor()
    {
        // data model 'Book' bisa dimiliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\Kantorr','kantor');
    }

    public function image()
    {
        if($this->cove && file_exists(public_path('image/avatar/' . $this->avatar))){
            return asset('image/books/' . $this->avatar);
        }else{
            return asset('image/no_image.png');
        }
    }

    public function deleteimage()
    {
        if($this->avatar && file_exists(public_path('image/avatar/' . $this->avatar))){
            return unlink(public_path('image/books/' . $this->avatar));
        }
    }
}
