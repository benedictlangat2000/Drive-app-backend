<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Ride;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customerCount = Customer::count();
        $driverCount = Driver::count();
        $completedRidesCount = Ride::where('status', 'Completed')->count();

        return view('dashboard.index', compact('customerCount', 'driverCount', 'completedRidesCount'));
    }
}
