<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dbadmin()
    {

        $halaman = 'admin';
        $admin_list = Admins::all();
        return view('dbadmin.index', compact('halaman', 'admin_list'));
    }
    public function create()
    {
        $halaman = 'admin';
        return view('dbadmin.create', compact('halaman'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username'=> 'required',
            'password'=> 'required'
            
        ]);

        $validatedData['password'] = md5($validatedData['password']);
        $validatedData['level'] = 'admin';
        

        Admins::create($validatedData);

        return redirect('dbadmin')->with('success', 'New Admin has been added');
        
    }

    public function edit($id)
    {
        $halaman = 'admin';
        $admin = Admins::findOrFail($id);
        return view('dbadmin.edit', compact('halaman', 'admin'));
    }

    public function update($id, Request $request)
    {
        $admin = Admins::findOrFail($id);
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8 '

        ]);

        $validatedData['password'] = md5($validatedData['password']);

        Admins::where('id', $id)->update($validatedData);

        return redirect('dbadmin/')->with('success', 'Admin has been updated');
    }
    public function delete($id)
    {
        $admin = Admins::findOrFail($id);
        $admin->delete();
        return redirect('dbadmin/')->with('success', 'Admin has been deleted');
    }
}
