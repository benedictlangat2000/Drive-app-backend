<?php

namespace App\Http\Controllers;

use App\Models\Customer; // Ensure the Customer model is imported
use App\Models\County; // Import the County model
use App\Models\SubCounty; // Import the SubCounty model
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Method to show all customers
    public function index(Request $request)
    {
        $query = Customer::query();

        // Filter by county if provided
        if ($request->filled('county')) {
            $query->where('county_id', $request->county);
        }

        // Filter by sub-county if provided
        if ($request->filled('subcounty')) {
            $query->where('sub_county_id', $request->subcounty);
        }

        // Get filtered customers, sorted by created_at (latest first)
        $customers = $query->with(['county', 'subCounty']) // Eager load relationships
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Adjust pagination as needed

        // Fetch counties and sub-counties for the filter options
        $counties = County::all(); // Fetch all counties
        $subCounties = SubCounty::all(); // Fetch all sub-counties

        return view('customers.index', compact('customers', 'counties', 'subCounties'));
    }

    // Other methods (create, store, edit, update, destroy) go here...
}
