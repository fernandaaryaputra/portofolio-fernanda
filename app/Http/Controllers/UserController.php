<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $request->session()->flush();

// jalan kan juga fungsi logout pada auth 

        Auth::logout();
        return redirect('/login')->with(['user' => 'Anda Bukan Admin']);
    }
}
