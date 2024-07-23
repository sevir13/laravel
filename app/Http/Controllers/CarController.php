<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return $user->id;
        $validator = Validator::make($request->all(), [
            "car_model_id" => ["integer"],
            "car_driver_id" => ["integer"],
            "travel_start" => ["date_format:Y-m-d H:i:s"],
            "travel_end" => ["date_format:Y-m-d H:i:s"]
        ]);

        if ($validator->fails()) {
            return $validator->messages();
        }

        // Получить проверенные данные...
        $validated = $validator->validated();

        return $validated;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
