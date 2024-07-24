<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CarComfort extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
        Role::class,
        "car_comfort_role",
            "car_comfort_id",
            "role_id"
        );
    }
}
