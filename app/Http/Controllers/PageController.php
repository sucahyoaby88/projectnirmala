<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Home;
use Session;
use RealRashid\SweetAlert\Facades\Alert;


class PageController extends Controller
{
    public function __construct(){
        $this->middleware('cek_login');
      }
  
      public function index(){
        return view('dashboard.index');
      
      }

      public function dashboard(){
        return view('adminpage/profiladmin');
      }
}
