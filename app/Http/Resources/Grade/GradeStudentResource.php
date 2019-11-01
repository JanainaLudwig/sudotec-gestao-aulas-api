<?php

namespace App\Http\Resources\Grade;

use Illuminate\Http\Resources\Json\JsonResource;

class GradeStudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $appendData = [
            'age' => $this->age,
        ];

        return array_merge(parent::toArray($request), $appendData);
    }
}
