<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function dbproduct()
    {
        $product = Product::all();

        return view('dbproduct.index', compact('product'));
    }

    public function create()
    {
        return view('dbproduct.create');
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $validatedData['image'] = $req->file('image')->store('images_product');

        // $image = $req->file('image');
        // $file_name = time()."_".$image->getClientOriginalName();
        // $folder_upload = 'image_product';        

        // $validatedData['image'] = $image->move($folder_upload,$file_name);

        Product::create($validatedData);

        return redirect('dbproduct/')->with('success', 'New Product has been added');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('dbproduct.edit', compact('product'));
    }

    public function update($id, Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if($req->file('image')) {
            if($req->oldImage) {
                Storage::delete($req->oldImage);
            }

            $validatedData['image'] = $req->file('image')->store('images_product');

            // $image = $req->file('image');
            // $file_name = time()."_".$image->getClientOriginalName();
            // $folder_upload = 'image_product';        
    
            // $validatedData['image'] = $image->move($folder_upload,$file_name);

        }

        Product::where('id', $id)->update($validatedData);

        return redirect('dbproduct/')->with('success', 'Product has been updated');
    }

    public function delete($id)
    {

        $product = Product::findOrFail($id);

        if($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();
        
        return redirect('dbproduct/')->with('success', 'Post has been deleted!');
    }
}
