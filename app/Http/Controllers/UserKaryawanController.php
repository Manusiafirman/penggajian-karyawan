<?php

namespace App\Http\Controllers;

use App\Models\UserKaryawan;
use Illuminate\Http\Request;

class UserKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userss = UserssKaryawan::with('Userss')->get();
        return view('admin.userkaryawan.index', compact('userss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userss = UserssKaryawan::all();
        return view('admin.usersskarayawan.create', compact('userss'));
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
            'user_id'=> 'required|unique:books',
            'karyawan_id'=> 'required',
            'status'=>'required',
        ]);

        $userss = new UserssKaryawan;
        $userss->title = $request->title;
        $userss->user_id =$request->user_id;
        // upload image foto
        if ($request->hasFile('cover')){
            $image = $request->file('cover');
            $name = rand(1000,9999). $image->getClientOriginalName();
            $image->move('image/books/', $name);
            $userss->cover = $name;
        }
        $userss->amount = $request->amount;
        $userss->save();
        return redirect()->route('userss.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserKaryawan  $userKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userss = UserssKaryawan::findOrFail($id);
        return view('admin.usersskaryawan.show', compact('userss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserKaryawan  $userKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userss = UserssKaryawan::findOrFail($id);
        $userss = Userss::all();
        return view('admin.userkaryawan.edit', compact('userkaryawan', 'userss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserKaryawan  $userKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id'=>'required',
            'karyawan_id'=>'required',
            'status' => 'required',
        ]);

        $userss = UserssKaryawan::findOrFail($id);
        $userss->user_id = $request->user_id;
        $userss->user_id = $request->user_id;
        // upload image/ foto
        if($request->hasFile('cover')){
            $userss->deleteimage();
            $image = $request-file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $userss->cover = $name;
        }
        $userss->status = $request->status;
        $userss->save();
        return redirect()->route('usersskaryawan.index');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserKaryawan  $userKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userss = UserssKaryawan::findOrFail($id);
        $userss->deleteimage();
        $userss->delete();
        return redirect()->route('usersskaryawan.index');
    }
}
