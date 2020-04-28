<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slides;
use DB;
use Validator,Redirect,File;

class SlideController extends Controller
{

	// ====== Backend ====== //

    public function listSlide() {

        $slide = Slides::all();
    	return view('admin.slides.main')->with('slide',$slide);
    }

    public function addSlide() {

    	return view('admin.slides.add');
    }

    public function insertSlide(Request $request) {

          $slide          = new Slides();
          $slide->name    = $request->name;
          $slide->content = $request->content;
          $slide->status  = $request->status;
          $slide->image   = $request->image;
          $slide->links   = $request->links;

          if ($request->hasFile('image')) {
          	 $file = $request->file('image');
          	 $name = $file->getClientOriginalName();
          	 $file->move('uploads/slides',$name);
          	 $slide->image = $name;
          }

          $slide->save();

          return redirect()->route('listslide');
    }
   
    // Delete slide
    public function deleteSlide($id) {

    	$slide = Slides::find($id);
    	$slide->delete();

    	return redirect()->route('listslide');
    }

    public function editSlide($id) {

    	$slide = DB::table('slides')->where('id',$id)->get();

    	return view('admin.slides.edit')->with('slide',$slide);

    }

    public function updateSlide(Request $request,$id) {

            $slide = Slides::find($id);

            $slide->name    = $request->name;
            $slide->content = $request->content;
            $slide->status  = $request->status;
            $slide->image   = $request->image;
            $slide->links   = $request->links;

            if ($request->hasFile('image')) {
          	    $file = $request->file('image');
          	    $name = $file->getClientOriginalName();
          	    $file->move('uploads/slides',$name);
          	    $slide->image = $name;
            }

            $slide->save();

            return redirect()->route('listslide');
    }

    // Update status of slide
    public function updateStatusSlide(Request $request,$id) {
         
    	$slide = Slides::find($id);

        ($slide->status == 0)?($slide->status = 1):($slide->status = 0);
    	$slide->save();
    	return redirect()->route('listslide');
    	
    }

    // ====== Frontend ====== //

} 
