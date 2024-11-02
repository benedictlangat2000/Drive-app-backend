<?php

namespace App\Http\Controllers;

use App\Models\Driver; // Import the Driver model
use App\Models\County; // Import the County model
use App\Models\SubCounty; // Import the SubCounty model
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(Request $request)
    {
        $query = Driver::query();

        // Filter by county if provided
        if ($request->filled('county')) {
            $query->where('county_id', $request->county);
        }

        // Filter by sub-county if provided
        if ($request->filled('subcounty')) {
            $query->where('subcounty_id', $request->subcounty);
        }

        // Get filtered drivers, sorted by registration date (latest first)
        $drivers = $query->with(['county', 'subcounty']) // Eager load relationships
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        // Fetch counties and sub-counties for the filter options
        $counties = County::all(); // Adjust as necessary to get counties
        $subcounties = SubCounty::all(); // Adjust as necessary to get sub-counties

        return view('drivers.index', compact('drivers', 'counties', 'subcounties'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string|unique:drivers',
            'pin' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email',
            'county_id' => 'required|integer',
            'sub_county_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $driver = Driver::create($request->all());
        return response()->json(['message' => 'Driver registered successfully', 'driver' => $driver], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'pin' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $driver = Driver::where('phone_number', $request->phone_number)
            ->where('pin', $request->pin)
            ->first();

        if (!$driver) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return response()->json(['message' => 'Login successful', 'driver' => $driver], 200);
    }

    public function getCounties()
    {
        $counties = County::all(); // Assuming you have a County model
        return response()->json($counties, 200);
    }

    public function getSubCounties($countyId)
    {
        $subCounties = SubCounty::where('county_id', $countyId)->get(); // Assuming you have a SubCounty model
        return response()->json($subCounties, 200);
    }
}
