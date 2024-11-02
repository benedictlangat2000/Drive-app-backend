<?php

namespace App\Http\Controllers;

use App\Models\Ride; // Make sure to import the Ride model
use Illuminate\Http\Request;

class RideController extends Controller
{
    // Method to show all ride requests
    public function index(Request $request)
    {
        // Check if a filter for registered date is applied
        $order = $request->get('registered_date', 'desc'); // Default to descending order
        
        // Fetch rides sorted by created_at
        $rides = Ride::orderBy('created_at', $order)->paginate(10); // You can adjust the pagination as needed

        return view('rides.index', compact('rides'));
    }

    // Other methods (create, store, edit, update, destroy) go here...
}
