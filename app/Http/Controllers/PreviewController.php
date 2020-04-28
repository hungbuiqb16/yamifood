<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Previews;
use DB,Validator,Redirect,File;

class PreviewController extends Controller
{
    public function listPreview() {

    	$preview = Previews::all();

    	return view('admin.previews.main')->with('preview',$preview);
    }

    public function addPreview() {

    	return view('admin.previews.add');
    }

    public function insertPreview(Request $request) {

        $preview = new Previews();

        $preview->name_customer    = $request->name_customer;
        $preview->job_customer = $request->job_customer;
        $preview->avatar    = $request->avatar;
        $preview->content   = $request->content;
        $preview->status   = $request->status;

        if($request->hasFile('avatar')) {
        	$file = $request->file('avatar');
          	$name = $file->getClientOriginalName();
          	$file->move('uploads/previews',$name);
          	$preview->avatar = $name;
        }
        $preview->save();
        
        return redirect()->route('listpreview');
    }

     public function editPreview($id) {

    	$preview = DB::table('previews')->where('id',$id)->get();

    	return view('admin.previews.edit')->with('preview',$preview);

    }

    public function updatePreview(Request $request,$id) {

        $preview = Previews::find($id);

        $preview->name_customer    = $request->name_customer;
        $preview->job_customer = $request->job_customer;
        $preview->avatar    = $request->avatar;
        $preview->content   = $request->content;
        $preview->status   = $request->status;

        if($request->hasFile('avatar')) {
        	$file = $request->file('avatar');
          	$name = $file->getClientOriginalName();
          	$file->move('uploads/previews',$name);
          	$preview->avatar = $name;
        }
        $preview->save();
        
        return redirect()->route('listpreview');

    }

    // Update status of preview
    public function updateStatusPreview(Request $request,$id) {
         
    	$preview = Previews::find($id);

        ($preview->status == 0)?($preview->status = 1):($preview->status = 0);
    	$preview->save();
    	return redirect()->route('listpreview');
    	
    }

    public function deletePreview($id) {

    	$preview = Previews::find($id);
    	$preview->delete();
    	
    	return redirect()->route('listpreview');
    	
    }
}
