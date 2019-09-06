<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Guestbook;

class GuestbookController extends Controller
{
    public function index(Request $request)
    {
    	$data['guestbooks'] = Guestbook::get(); 
    	return view('admin.guestbook.index',$data);
    }

    public function create(Request $request)
    {
    	return view('admin.guestbook.create');
    }

    public function store(Request $request)
    {
    	$guestbook = new Guestbook;
    	$guestbook->nama=$request->nama;
    	$guestbook->no_telp =$request->no_telp ;
    	$guestbook->instansi=$request->instansi;
    	$guestbook->alamat=$request->alamat;
    	$guestbook->save();

		return redirect('admin/guestbook')->with('success', 'Data berhasil di simpan'); 
    }

    public function edit($id)
    {
        $data['guestbook'] = Guestbook::find($id);
        return view('admin.guestbook.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $guestbook = Guestbook::find($id);
        $guestbook->nama=$request->nama;
        $guestbook->no_telp =$request->no_telp ;
        $guestbook->instansi=$request->instansi;
        $guestbook->alamat=$request->alamat;
        $guestbook->save();

        return redirect('admin/guestbook')->with('success', 'Data berhasil di update'); 
    }

    public function delete($id)
    {
        $guestbook = Guestbook::find($id);
        $guestbook->delete();
        return redirect('admin/guestbook')->with('danger', 'Data berhasil di delete'); 
    }
}
