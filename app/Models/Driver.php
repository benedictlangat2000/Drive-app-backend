<?php

// app/Models/Driver.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone_number', 
        'pin', 
        'gender', 
        'email', 
        'county_id', // Assuming you're storing the county_id directly
        'sub_county_id', // Assuming you're storing the sub_county_id directly
        'status'
    ];

    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class);
    }

    public function subCounty(): BelongsTo
    {
        return $this->belongsTo(SubCounty::class);
    }
};
