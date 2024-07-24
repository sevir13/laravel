<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "car_model_id" => ["integer"],
            "travel_start" => ["date_format:Y-m-d H:i:s"],
            "travel_end" => ["date_format:Y-m-d H:i:s"]
        ]);

        if ($validator->fails()) {
            return $validator->messages();
        }

        try {
            $validated = $validator->validated();

            $role = Role::findOrFail($user->role_id);
            $carComforts = $role->carComforts;
            if($carComforts->isNotEmpty()) {
                $carComfortIds = $carComforts->pluck("id")->all();
            } else {
                $carComfortIds = [];
            }

            $query = Car::query();

            $query->when($carComfortIds, function ($query, array $carComfortIds) {
                $query->whereIn("car_comfort_id", $carComfortIds);
            });

            if(isset($validated["car_model_id"])) {
                $a = $validated["car_model_id"];
                $query->when($a, function ($q, $a) {
                    $q->where("car_model_id", $a);
                });
            }

            if(isset($validated["travel_start"])) {
                $b = $validated["travel_start"];
                $query->when($b, function ($q, $b) {
                    $date = Carbon::parse($b)->toDateString();
                    $time = Carbon::parse($b)->toTimeString();
                    $q->whereDate("travel_start", ">=" ,$date)
                        ->whereTime("travel_start", ">=", $time);
                });
            }

            if(isset($validated["travel_end"])) {
                $c = $validated["travel_end"];
                $query->when($c, function ($q, $c) {
                    $date = Carbon::parse($c)->toDateString();
                    $time = Carbon::parse($c)->toTimeString();
                    $q->whereDate("travel_end", "<=" ,$date)
                        ->whereTime("travel_end", "<=", $time);
                });
            }

            return CarResource::collection($query->paginate(10));
        } catch(\Exception $e) {
            return response()->json([
                "error" => 1,
                "message" => $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine()
            ]);
        }
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
