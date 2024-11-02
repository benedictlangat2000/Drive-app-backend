<?php
// app/Models/Ride.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 
        'driver_id', 
        'pickup_point', 
        'dropoff_point', 
        'passengers', 
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}