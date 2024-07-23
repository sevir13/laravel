<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDriver extends Model
{
    use HasFactory;

    protected $fillable = [
        "surname",
        "name"
    ];

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
