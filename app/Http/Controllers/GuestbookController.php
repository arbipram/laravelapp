<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;

class GuestbookController extends Controller
{
    public function index(){
        return view('guestbook.index');
    }

    public function store(Request $request)
    {
    	$guestbook = new Guestbook;
    	$guestbook->nama = $request->nama; 
    	$guestbook->no_telp = $request->no_telp;
    	$guestbook->instansi = $request->instansi;
    	$guestbook->alamat = $request->alamat;
    	$guestbook->save();

    	return redirect()->back();
    }
}
