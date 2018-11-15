<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class file extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//untuk mengeluarkan tampilan
        $data = \App\File::all();
		return view('file',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function create()
    {
        return view('file_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\File();
		$data->name = $request->input('name');
		$file = $request->file('file');
		$ext = $file->getClientOriginalExtension();
		$newName = rand(100000,1001238912).".".$ext;
		$file->move('uploads/file',$newName);
		$data->file = $newName;
		$data->save();
		return redirect()->route('file.index')->with('alert-success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = file::find($id)->first();
		$data->delete();
		return redirect()->route('file.index')->with(
		'alert-success','Data Berhasil Dihapus!');
    }
}
