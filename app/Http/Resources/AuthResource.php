<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'author_id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'author_email' => $this->email,
            'avatar' => $this->profile_photo_path,
            'token' => $this->token,
        ];
    }
}
