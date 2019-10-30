<?php

namespace App\Http\Resources\Grade;

use App\Http\Resources\Lesson\LessonResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
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
            'course' => $this->course,
            'teacher' => $this->teacher,
            'project_id' => $this->course->project_id,
            'students' => $this->students,
            'lessons' => LessonResource::collection($this->lessons),
        ];

        return array_merge(parent::toArray($request), $appendData);
    }
}
