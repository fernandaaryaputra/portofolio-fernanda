<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){
        $data = array(
            'users' => User::all()
        ) ;
        return view('back.user',$data);
    }
    public function destroy(Request $request)
    {
        $users = User::find($request->id);
        $users->delete();
        return redirect('/admin/user')->with(['delete' => 'data has been successfully deleted']);
    }
    public function cetakPegawai()
    {
        $data = array(
            'users' => User::all()
        ) ;
        return view('back.cetak-user',$data);
    }
}
