<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Repositories\Student\StudentRepository;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * @var StudentRepository
     */
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index() {
        return response()->json([
            'data' => [
                'gender' => [
                    'F' => Student::where('gender', 'F')->count(),
                    'M' => Student::where('gender', 'M')->count(),
                ],
                'ages' => $this->studentRepository->getStudentsAgeStats(),
            ]
        ]);
    }
}
