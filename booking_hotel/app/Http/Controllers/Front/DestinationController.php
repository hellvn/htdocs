<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Hotels;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function destinations(){

       $destinations = Destinations::all();
       $hotels = Hotels::all();

       return view('front.destination.destinations',compact('destinations','hotels'));
    }
    public function destinationDetail($id){
        $destinationDetail = Destinations::findOrFail($id);

        return view('front.destination.destination-detail', compact('destinationDetail'));
    }
    public function hotelInDestination($destinationId, Request $request){
        $destinations = Destinations::all();
        $hotel = Destinations::where('id', $destinationId)->first()->hotels->toQuery()->paginate();

        return view('front.hotel.listhotel', compact('destinations', $hotel));
    }
}
