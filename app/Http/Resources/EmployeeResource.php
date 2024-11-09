<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'username'=> $this->name,
            "the_address" => $this->address,
            "the_email" => $this->email,
            "the_mobile" => $this->mobile,
            "the_gender" => $this->gender,
        ];
    }
}
