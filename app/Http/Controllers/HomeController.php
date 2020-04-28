<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Previews;
use App\Models\Products;
use App\Models\Slides;
use App\Models\Menu;
use App\Models\Gallery;

use DB,Validator,Redirect,File;

class HomeController extends Controller
{
    
    public function showIndex() {
    
        //get product by menu
        $pd_drinks = Products::where('id_menu',1)->get();
        $pd_lunch  = Products::where('id_menu',2)->get();
        $pd_dinner = Products::where('id_menu',3)->get();
        //get gallery
        $gallery   = Gallery::all();
        //get preview
        $preview   = Previews::where('status',0)->get();

    	return view('index.home')->with('pd_drinks',$pd_drinks)
						    	 ->with('pd_lunch',$pd_lunch)
						    	 ->with('pd_dinner',$pd_dinner)
						    	 ->with('gallery',$gallery)
						    	 ->with('preview',$preview);
    }
}
