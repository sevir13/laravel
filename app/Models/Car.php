<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "car_comfort_id",
        "car_model_id",
        "car_driver_id",
        "travel_start",
        "travel_end"
    ];

    public function carComfort()
    {
        return $this->belongsTo(CarComfort::class);
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function carDriver()
    {
        return $this->belongsTo(CarDriver::class);
    }
}
