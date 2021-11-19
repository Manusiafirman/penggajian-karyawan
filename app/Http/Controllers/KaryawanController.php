<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatann;
use App\Models\Kantorr;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::with('jabatan')->get();
        return view('admin.karyawan.index', compact('karyawan'));

        $karyawan = Karyawan::with('kantor')->get();
        return view('admin.karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatann::all();
        $kantorr = Kantorr::all();
        return view('admin.karyawan.create', compact('jabatan','kantorr'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=> 'required',
            'nama_depan'=>'required',
            'nama_belakang'=>'required',
            'jenis_kelamin'=>'required',
            'jabatan'=>'required',
            'kantor'=>'required',
            'agama'=>'required',
            'pendidikan'=>'required',
            'alamat'=>'required',
            'avatar'=> 'required|image|max:2048',
            'gaji'=>'required',
            
        ]);

        $karyawan = new Karyawan;
        $karyawan->nik = $request->nik;
        $karyawan->nama_depan=$request->nama_depan;
        $karyawan->nama_belakang=$request->nama_belakang;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->jabatan =$request->jabatan;
        $karyawan->kantor =$request->kantor;
        $karyawan->agama = $request->agama;
        $karyawan->pendidikan = $request->pendidikan;
        $karyawan->alamat = $request->alamat;
        // upload image foto
        if ($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $name = rand(1000,9999). $image->getClientOriginalName();
            $image->move('image/books/', $name);
            $karyawan->avatar = $name;
        }
        $karyawan->gaji = $request->gaji;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $jabatan = Jabatann::all();
        $kantor = Kantor::all();
        return view('admin.karyawan.edit', compact('karyawan', 'jabatan', 'kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nik'=>'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'kantor' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'alamat' => 'required',
            'gaji' => 'required',
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->nik = $request->nik;
        $karywan->jabatan = $request->jabatan;
        // upload image/ foto
        if($request->hasFile('avatar')){
            $book->deleteimage();
            $image = $request-file('avatar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $karyawan->avatar = $name;
        }
        $karyawan->gaji = $request->gaji;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->deleteimage();
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
