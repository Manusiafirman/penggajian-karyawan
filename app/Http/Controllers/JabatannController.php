<?php

namespace App\Http\Controllers;

use App\Models\Jabatann;
use Illuminate\Http\Request;

class JabatannController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatann = Jabatann::all();
        return view('admin.jabatan.index' ,compact('jabatann'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode'=>'required',
            'nama'=>'required'
        ]);

        $jabatann = new Jabatann;
        $jabatann->kode = $request->kode;
        $jabatann->nama = $request->nama;
        $jabatann->save();
        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatann  $jabatann
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatann = Jabatann::findOrFail($id);
        return view('admin.jabatan.show', compact('jabatann'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatann  $jabatann
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatann = Jabatann::findOrFail($id);
        return view('admin.jabatan.edit' ,compact('jabatann'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatann  $jabatann
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kode'=> 'required',
            'nama'=> 'required',
        ]);

        $jabatann = Jabatann::findOrFail($id);
        $jabatann->kode = $request->kode;
        $jabatann->nama = $request->nama;
        $jabatann->save();
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatann  $jabatann
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatann = Jabatann::findOrFail($id);
        $jabatann->delete();
        return redirect()->route('jabatan.index');
    }
}
