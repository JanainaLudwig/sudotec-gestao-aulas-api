<?php

namespace App\Http\Controllers;

use App\Http\Requests\Grade\StoreGradeRequest;
use App\Http\Requests\Grade\UpdateGradeRequest;
use App\Http\Resources\Grade\GradeResource;
use App\Http\Resources\Grade\GradeStudentResource;
use App\Models\Grade;
use App\Repositories\Grade\GradeRepository;

class GradeController extends Controller
{
    private $gradeRepository;

    public function __construct(GradeRepository $gradeRepository)
    {
        $this->gradeRepository = $gradeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $grades = $this->gradeRepository->all();

        return GradeResource::collection($grades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return GradeResource
     */
    public function store(StoreGradeRequest $request)
    {
        $grade = $this->gradeRepository->create($request);

        return new GradeResource($grade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        $grade['students'] = $this->gradeRepository->getStudentsWithFrequency($grade);

        return response()->json(new GradeResource($grade));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return GradeResource
     */
    public function update(UpdateGradeRequest $request, Grade $grade)
    {
        $grade = $this->gradeRepository->update($grade, $request);

        return new GradeResource($grade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $this->gradeRepository->delete($grade);

        return response()->json(['message' => 'Grade deleted']);
    }
}
