<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Test::all();
        return view('test/test', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new Test();
        $test->id = $request->id;
        $test->nama = $request->nama;
        $test->NIS = $request->NIS;
        $test->alamat = $request->alamat;
        $test->jurusan = $request->jurusan;
        $test->ttl = $request->ttl;
        $test->nama_sekolah = $request->nama_sekolah;
        $test->save();
        return redirect()->route('test.index')->with('alert-success', 'Data Berhasil Di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        return view('test/EditTest', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $test = Test::findOrFail($id);
        $test->nama = $request->nama;
        $test->NIS = $request->NIS;
        $test->alamat = $request->alamat;
        $test->jurusan = $request->jurusan;
        $test->ttl = $request->ttl;
        $test->nama_sekolah = $request->nama_sekolah;
        $test->save();
        return redirect()->route('test.index')->with('alert-success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function destroy(odel $odel)
    {
        $test = Test::findOrFail($id);
        $test->save();
        return redirect()->route('test.index')->with('alert-success', 'Data Berhasil DIhapus');
    }
}
