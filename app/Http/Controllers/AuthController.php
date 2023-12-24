<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bookings;
use App\Models\Products;
use DB,Validator,Redirect,File;

class AuthController extends Controller
{

    // public function getLogin() {
    // 	if (Auth::check()) {
    // 		return redirect()->route('dashboard');
    // 	}
    // 	return view('admin.login');
    // }

    public function postLogin(Request $request) {

    	$data = [
           'username' => $request->username,
           'password' => $request->password,
    	];
        
    	if(Auth::attempt($data)) {
            return redirect()->intended('dashboard');
    	} else {
    		return redirect('/login');
    	}
    }
   
    public function dashboard() {

        $booking = Bookings::orderBy('id','desc')->get();
        $product = Products::orderBy('id','desc')->take(4)->get();

    	return view('admin.home')->with('booking',$booking)
                                 ->with('product',$product);
    }

    public function logout() {
        Auth::logout();
    	return redirect('/login');
    }
}
