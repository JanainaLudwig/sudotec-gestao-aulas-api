<?php

namespace App\Http\Controllers;

use App\Http\Resources\Grade\GradeStudentResource;
use App\Models\Grade;
use App\Models\Student;
use App\Repositories\Attendance\AttendanceRepository;
use App\Repositories\Grade\GradeRepository;
use Illuminate\Http\Request;

class GradeStudentController extends Controller
{
    private $gradeRepository;

    public function __construct(GradeRepository $gradeRepository)
    {
        $this->gradeRepository = $gradeRepository;
    }

    public function index(Grade $grade)
    {
        $students = $this->gradeRepository->getStudentsWithFrequency($grade);

        return GradeStudentResource::collection($students);
    }

    public function searchNotIn(Request $request, Grade $grade)
    {
        $gradeStudentsIds = $grade->students()->get()->pluck('id')->toArray();

        $search = $request->input('search') ?? '';

        $students = Student::where('name', 'LIKE', "%$search%")
            ->whereNotIn('id', $gradeStudentsIds)
            ->get();

        return response()->json(['data' => $students]);
    }

    public function store(Request $request, Grade $grade)
    {
        $grade->students()->attach($request->student_id);

        foreach ($grade->lessons as $lesson) {
            $attendanceRepository = new AttendanceRepository;

            $attendanceRepository->create(new Request([
                'lesson_id' => $lesson->id,
                'student_id' => $request->student_id,
                'presence' => 'A'
            ]));
        }
    }

    public function delete(Grade $grade, Student $student)
    {
        $grade->students()->detach($student->id);
    }
}
