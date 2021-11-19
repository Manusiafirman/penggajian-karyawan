<?php

namespace App\Http\Controllers;

use App\Models\Pendapatana;
use Illuminate\Http\Request;

class PendapatanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendapatana = Pendapatana::all();
        return view('admin.pendapatan.index' ,compact('pendapatana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pendapatan.create');
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
            'tunjangan'=>'required'
        ]);

        $pendapatana = new Pendapatana;
        $pendapatana->kode = $request->kode;
        $pendapatana->tunjangan = $request->tunjangan;
        $pendapatana->save();
        return redirect()->route('pendapatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendapatana  $pendapatana
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pendapatana = Pendapatana::findOrFail($id);
        return view('admin.pendapatan.show', compact('pendapatana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendapatana  $pendapatana
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pendapatana = Pendapatana::findOrFail($id);
        return view('admin.pendapatan.edit' ,compact('pendapatana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendapatana  $pendapatana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'kode'=> 'required',
            'tunjangan'=> 'required',
        ]);

        $pendapatana = pendapatana::findOrFail($id);
        $pendapatana->kode = $request->kode;
        $pendapatana->tunjangan = $request->tunjangan;
        $pendapatana->save();
        return redirect()->route('pendapatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendapatana  $pendapatana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pendapatana = Pendapatana::findOrFail($id);
        $pendapatana->delete();
        return redirect()->route('pendapatan.index');
    }
}
