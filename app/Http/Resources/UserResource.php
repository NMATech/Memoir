<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use function Laravel\Prompts\error;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->id,
            'user_name' => $this->name,
            'user_email' => $this->email,
            'user_created_at' => $this->created_at,
            'user_profile' => new UserProfileResource($this->user_profile),
//            'posts' => PostResource::collection($this->post),
        ];
    }
}
