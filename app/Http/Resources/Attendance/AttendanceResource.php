<?php

namespace App\Http\Resources\Attendance;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
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
            'justification' => $this->justification,
            'name' => $this->student->name
        ];

        return array_merge(parent::toArray($request), $appendData);
    }
}
