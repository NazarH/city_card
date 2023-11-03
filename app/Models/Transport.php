<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transport extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
