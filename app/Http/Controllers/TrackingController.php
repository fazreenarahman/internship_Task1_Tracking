<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller {

    public function displayTrackingID(Request $request) { 

         return "The tracking number is: " . $request->trackid; 
    }

}
