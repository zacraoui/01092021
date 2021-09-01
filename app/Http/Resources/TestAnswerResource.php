<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestAnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'test_id' => $this->test_id,
            'question_id' => $this->question_id,
            'correct' => $this->correct,
            'option_id' => $this->option_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
          
        ];
    }
}
