<?php

namespace App\Http\Controllers;

use App\Models\Kantorr;
use Illuminate\Http\Request;

class KantorrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kantorr = Kantorr::all();
        return view('admin.kantor.index' ,compact('kantorr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.kantor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kode'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
        ]);

        $kantorr = new Kantorr;
        $kantorr->kode = $request->kode;
        $kantorr->nama = $request->nama;
        $kantorr->alamat =$request->alamat;
        $kantorr->save();
        return redirect()->route('kantor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kantorr  $kantorr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kantorr = Kantorr::findOrFail($id);
        return view('admin.kantor.show', compact('kantorr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kantorr  $kantorr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kantorr = Kantorr::findOrFail($id);
        return view('admin.kantor.edit', compact('Kantorr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kantorr  $kantorr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validated = $request->validate([
            'kode'=>'required',
            'name'=> 'required',
            'alamat'=>'required',
        ]);

        $kantorr = Kantorr::findOrFail($id);
        $kantorr->kode = $request->kode;
        $kantorr->name = $request->name;
        $kantorr->alamat = $request->alamat;
        $kantorr->save();
        return redirect()->route('kantor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kantorr  $kantorr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kantorr = Kantorr::findOrFail($id);
        $kantorr->delete();
        return redirect()->route('kantor.index');
    }
}
