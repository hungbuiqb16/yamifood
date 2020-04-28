<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use DB,Validator,Redirect,File;

class GalleryController extends Controller
{
   
    public function listImage() {

        $gallery = Gallery::all();

    	return view('admin.gallery.main')->with('gallery',$gallery);
    }

    public function addImage() {
        
        return view('admin.gallery.add');
    }

    public function insertImage(Request $request) {

    	$image = new Gallery();

    	$image->image = $request->image;

        if($request->hasFile('image')) {
        	$file = $request->file('image');
          	$name = $file->getClientOriginalName();
          	$file->move('uploads/gallery',$name);
          	$image->image = $name;
        }
        $image->save();

        return redirect()->route('gallery');

    }

    public function deleteImage($id) {
        
        $image = Gallery::find($id);
        $image->delete();
     
        return redirect()->route('gallery');

    }
}
