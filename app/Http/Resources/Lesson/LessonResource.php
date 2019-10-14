<?php

namespace App\Http\Resources\Lesson;

use App\Http\Resources\Attendance\AttendanceResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
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
            'attendances' => AttendanceResource::collection($this->attendances),
        ];

        return array_merge(parent::toArray($request), $appendData);
    }
}
