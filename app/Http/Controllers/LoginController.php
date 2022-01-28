<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admins;
use Session;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function cek(Request $req){
        $this->validate($req,[
        'username'=>'required',
        'password'=>'required|min:8'
        ]);

        $proses = Admins::where ('username',$req->username)->where('password',md5($req->password));
        if ($proses->count()>0) {
          $data = $proses->first();
          Session::put('id', $data->id);
          Session::put('username', $data->username);
          Session::put('password', $data->password);
          Session::put('level', $data->level);
          Session::put('login_status',true);
          return redirect('/dashboard')->withSuccess('Login Successfully!');
        } else {
          return back()->with('pesan', 'Email or Password is not valid!');
        }
    }

    public function logout(){
      Session::flush();
      return redirect('login/');
    }
}

