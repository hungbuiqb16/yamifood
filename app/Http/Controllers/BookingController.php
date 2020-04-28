<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;
use DB,Validator,Redirect,File;

class BookingController extends Controller
{
    public function booking() {

    	return view('index.booking');
    }

    public function setBooking(Request $request) {

        $booking = new Bookings();

        $booking->name   = $request->name;
        $booking->email  = $request->email;
        $booking->phone  = $request->phone;
        $booking->person = $request->person;
        $booking->date   = $request->date;
        $booking->hours  = $request->hours;

        $booking->save();

        return redirect()->route('home');

    }

    public function listBooking() {

        $booking = Bookings::all();

    	return view('admin.booking.main')->with('booking',$booking);
    }

    // Update status of booking
    public function updateStatusBooking(Request $request,$id) {
         
    	$booking = Bookings::find($id);

        ($booking->status == 0)?($booking->status = 1):($booking->status = 0);
    	$booking->save();

    	return redirect()->route('list.booking');
    	
    }

    public function deleteBooking($id) {

    	$booking = Bookings::find($id);

    	$booking->delete();
    	return redirect()->route('list.booking');
    }
}
