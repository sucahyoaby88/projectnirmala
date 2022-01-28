<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Teams;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class TeamController extends Controller
{
    public function dbteam()
    {
        $team = Teams::all();

        return view('dbteam.index', compact('team'));
    }

    public function create()
    {
        return view('dbteam.create');
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'instagram' => 'required'
        ]);

        $validatedData['image'] = $req->file('image')->store('images_team');

        // $image = $req->file('image');
        // $file_name = time()."_".$image->getClientOriginalName();
        // $folder_upload = 'image_team';        

        // $validatedData['image'] = $image->move($folder_upload,$file_name);

        Teams::create($validatedData);

        return redirect('dbteam/')->with('success', 'New Team has been added');
    }

    public function edit($id)
    {
        $team = Teams::findOrFail($id);
        return view('dbteam.edit', compact('team'));
    }

    public function update($id, Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email',
            'instagram' => 'required'
        ]);

        if($req->file('image')) {
            if($req->oldImage) {
                Storage::delete($req->oldImage);
            }

            $validatedData['image'] = $req->file('image')->store('images_team');

            // $image = $req->file('image');
            // $file_name = time()."_".$image->getClientOriginalName();
            // $folder_upload = 'image_team';        
    
            // $validatedData['image'] = $image->move($folder_upload,$file_name);

        }

        Teams::where('id', $id)->update($validatedData);

        return redirect('dbteam/')->with('success', 'Team has been updated');
    }

    public function delete($id)
    {

        $team = Teams::findOrFail($id);

        if($team->image) {
            Storage::delete($team->image);
        }

        $team->delete();
        
        return redirect('dbteam/')->with('success', 'Post has been deleted!');
    }
}
