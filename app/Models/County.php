<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function subCounties(): HasMany
    {
        return $this->hasMany(SubCounty::class);
    }
}
