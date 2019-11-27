<?php


namespace App\Repositories\Grade;


use App\Models\Grade;
use App\Repositories\AbstractRepository;
use Illuminate\Database\Eloquent\Collection;

class GradeRepository extends AbstractRepository
{
    protected $model = Grade::class;

    public function all() : Collection
    {
        if (auth()->user()->type === 'admin') {
            return $this->model::all();
        }

        return auth()->user()->grades;
    }

    public function getStudentsWithFrequency($grade)
    {
        $lessonsIds = $grade->lessons()->get()->pluck('id')->toArray();

        $students = $grade->students->loadCount([
            'attendances as attendances_count' => function($query) use ($lessonsIds) {
                $query->whereIn('lesson_id', $lessonsIds);
            },
            'attendances as presences' => function($query) use ($lessonsIds) {
                $query->whereIn('lesson_id', $lessonsIds)
                    ->whereIn('presence', ['P', 'J']);
            }
        ]);

        $students = $students->map(function($student) {
            if ($student->attendances_count == 0) {
                $frequency = 100;
            } else {
                $frequency = number_format(($student->presences / $student->attendances_count) * 100, 0);
            }

            $student['frequency'] = $frequency;

            return $student;
        });

        return $students;
    }
}
