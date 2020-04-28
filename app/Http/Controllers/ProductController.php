<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use DB,Validator,Redirect,File;

class ProductController extends Controller
{

    public function listProduct() {

    	$product = Products::all();

    	return view('admin.products.main')->with('product',$product);
    }

    public function addProduct() {

    	return view('admin.products.add');
    }

    public function insertProduct(Request $request) {
  
        $product          = new Products();

        $product->name    = $request->name;
        $product->id_menu = $request->idmenu;
        $product->desc    = $request->desc;
        $product->image   = $request->image;
        $product->price   = $request->price;

        if($request->hasFile('image')) {
        	$file = $request->file('image');
          	$name = $file->getClientOriginalName();
          	$file->move('uploads/products',$name);
          	$product->image = $name;
        }
        $product->save();
        
        return redirect()->route('listproduct');
    }

    // Delete slide
    public function deleteProduct($id) {

    	$product = Products::find($id);
    	$product->delete();

    	return redirect()->route('listproduct');
    }

    public function editProduct($id) {

    	$product = DB::table('products')->where('id',$id)->get();

    	return view('admin.products.edit')->with('product',$product);

    }

    public function updateProduct(Request $request,$id) {

            $product = Products::find($id);

	        $product->name    = $request->name;
	        $product->id_menu = $request->idmenu;
	        $product->desc    = $request->desc;
	        $product->image   = $request->image;
	        $product->price   = $request->price;

	        if($request->hasFile('image')) {
	        	$file = $request->file('image');
	          	$name = $file->getClientOriginalName();
	          	$file->move('uploads/products',$name);
	          	$product->image = $name;
	        }

            $product->save();

            return redirect()->route('listproduct');
    }
}
