<?php

namespace App\Http\Controllers;

use App\Models\Potongann;
use Illuminate\Http\Request;

class PotongannController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $potongann = Potongann::all();
        return view('admin.potongan.index' ,compact('potongann'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.potongan.create');
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
            'pengurangan'=>'required'
        ]);

        $potongann = new Potongann;
        $potongann->kode = $request->kode;
        $potongann->pengurangan = $request->pengurangan;
        $potongann->save();
        return redirect()->route('potongan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Potongann  $potongann
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $potongann = Potongann::findOrFail($id);
        return view('admin.potongan.show', compact('potongann'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Potongann  $potongann
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $potongann = Potongann::findOrFail($id);
        return view('admin.potongan.edit' ,compact('potongann'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Potongann  $potongann
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validated = $request->validate([
            'kode'=> 'required',
            'pengurangan'=> 'required',
        ]);

        $potongann = Potongann::findOrFail($id);
        $potongann->kode = $request->kode;
        $potongann->pengurangan = $request->pengurangan;
        $potongann->save();
        return redirect()->route('potongan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Potongann  $potongann
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $potongann = Potongann::findOrFail($id);
        $potongann->delete();
        return redirect()->route('potongan.index');
    }
}
