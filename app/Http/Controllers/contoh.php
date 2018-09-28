<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller{
    //
	public function index(){
	//code
	return view('ini controller function index');
	//pengkodean dibeda file menggunakan return view
	}
	public function create(){
	return view('ini controller function create'); 	
	}
	public function tambah(){
	return view('tambah');
	}
}
