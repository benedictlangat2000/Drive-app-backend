<?php

// app/Models/Customer.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone_number',
        'pin', 
        'gender', 
        'email', 
        'county_id', 
        'sub_county_id'
    ];

    public function county(): BelongsTo
    {
        return $this->belongsTo(County::class, 'county_id');
    }

    /**
     * Get the sub-county associated with the customer.
     */
    public function subCounty(): BelongsTo
    {
        return $this->belongsTo(SubCounty::class, 'sub_county_id');
    }
}

