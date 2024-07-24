<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function comments()
    {
        return $this->hasMany(User::class);
    }

    public function carComforts(): BelongsToMany
    {
        return $this->belongsToMany(
            CarComfort::class,
            "car_comfort_role",
            "role_id",
            "car_comfort_id"
        );
    }
}
