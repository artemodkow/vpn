<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->client_id,
            'name' => $this->name,
            'address' => $this->address,
            'enabled' => $this->enabled,
            'expired_at' => $this->expired_at,
        ];
    }
}
