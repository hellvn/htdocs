<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HotelComments;
use App\Models\Hotels;
use App\Models\Rooms;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotel($id){

        $hotel = Hotels::findOrFail($id);
        $room = Rooms::findOrFail($id);

        return view('front.hotel.show', compact('hotel', 'room'));
    }
    public function postComment(Request $request){
        HotelComments::create($request->all());

        return redirect()->back();
    }

    public  function  SortAndPaginate(){

    }
}
