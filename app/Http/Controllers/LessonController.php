<?php

namespace App\Http\Controllers;

use App\Http\Resources\Attendance\AttendanceResource;
use App\Http\Resources\Lesson\LessonResource;
use App\Models\Lesson;
use App\Repositories\Lesson\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $projects = $this->lessonRepository->all();

        return AttendanceResource::collection($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return LessonResource
     */
    public function store(Request $request)
    {
        $lesson = $this->lessonRepository->create($request);

        return new LessonResource($lesson);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return LessonResource
     */
    public function show(Lesson $lesson)
    {
        return new LessonResource($lesson);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return LessonResource
     */
    public function update(Request $request, Lesson $lesson)
    {
        $lesson = $this->lessonRepository->update($lesson, $request);

        return new LessonResource($lesson);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $this->lessonRepository->delete($lesson);

        return response()->json(['message' => 'Lesson deleted']);
    }
}
