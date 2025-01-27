<?php

namespace App\Http\Resources\API\Admin\Websites;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WebsiteListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'domain' => $this->domain,
            'phone' => $this->phone,
            'phone1' => $this->phon1,
            'address' => $this->address,
            'logo' => $this->logo,
            'news' => $this->news,
            'email' => $this->email,
            'status' => $this->status,
            'order' => $this->order,
            'wel_msg' => $this->wel_msg,
            'about' => $this->about,
            'created_at' => $this->created_at->toDateString(),
        ];
    }
}
