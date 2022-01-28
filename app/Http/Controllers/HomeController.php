<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Team;
use App\Product;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $team = Team::all();
        $product = Product::all();

        return view('index-parallax', compact('home', 'team', 'product'));
    }

    public function dbhome()
    {
        $home = Home::first();
        return view('dashboard.index', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('dashboard.edit', compact('home'));
    }

    public function update($id, Request $req)
    {
        $validatedData = $req->validate([
            'description' => 'required',
            'about' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'whatsapp' => 'required'
        ]);

        $validatedData['linkyt'] = $req->linkyt;
        
        Home::where('id', $id)->update($validatedData);


        return redirect('dashboard/')->with('success', 'Homepage has been updated');

    }

}
