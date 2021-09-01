<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'topic_id' => $this->topic_id,
            'question_text' => $this->question_text,
            'code_snippet' => $this->code_snippet,
            'answer_explanation' => $this->answer_explanation,
            'more_info_link' => $this->more_info_link,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            
        ];
    }
}
