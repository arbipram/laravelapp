<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	return view ('admin.login.index');
    }

    public function auth(Request $request)
    {
    	$user = User::where('email',$request->email)->first();
    	if (!empty($user) && Hash::check($request->password, $user->password)) {
            session()->put('id', $user->id);
            session()->put('username', $user->name);
            session()->put('email', $user->email);
            return redirect('/admin/guestbook');
        } else {
            return redirect()->back()->with('gagal', 'Username Atau Password Tidak Sesuai'); 
        }
    }

    public function logout(Request $request)
    {
        session()->flush();
        return redirect('admin/login');
    }
}
