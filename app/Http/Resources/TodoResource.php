<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'todo_name'=>$this->todo_name,
            'completed'=>$this->completed,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at
        ];
    }
}
