<?php

namespace App\Http\Resources;

use App\Models\UserRelationship;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserRelationshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'to' => new UserResource($this->toUser),
            'status' => $this->status,
        ];
    }
}
