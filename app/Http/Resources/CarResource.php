<?php

namespace App\Http\Resources;

use App\Models\CarComfort;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "car_comfort" => $this->carComfort->name,
            "car_model" => $this->carModel->name,
            "car_driver" => $this->carDriver->surname . " " . $this->carDriver->name,
            "travel_start" => $this->travel_start,
            "travel_end" => $this->travel_end
        ];
    }
}
