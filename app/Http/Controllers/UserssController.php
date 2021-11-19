<?php

namespace App\Http\Controllers;

use App\Models\userss;
use Illuminate\Http\Request;

class UserssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userss = Userss::all();
        return view('admin.User.index' ,compact('Userss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
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
            'nama'=>'required'
        ]);

        $userss = new Userss;
        $userss->name = $request->name;
        $userss->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $userss = Userss::findOrFail($id);
        return view('admin.user.show', compact('Userss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $userss = Userss::findOrFail($id);
        return view('admin.user.edit' ,compact('Userss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'name'=> 'required',
        ]);

        $userss = Userss::findOrFail($id);
        $userss->name = $request->name;
        $userss->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function destroy(userss $id)
    {
        //
        $userss = Userss::findOrFail($id);
        $userss->delete();
        return redirect()->route('user.index');
    }
}
