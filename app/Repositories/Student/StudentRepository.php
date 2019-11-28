<?php


namespace App\Repositories\Student;


use App\Models\Student;
use App\Repositories\AbstractRepository;

class StudentRepository extends AbstractRepository
{
    protected $model = Student::class;

    public function getStudentsAgeStats() {
        $minAge = Student::all()->min('age');
        $maxAge = Student::all()->max('age');

        $ages = array();

        $ages['10-'] = $this->getStudentsAgeCount(10, true);

        $searches = [[11, 14], [15, 17], [18, 25], [26, 36]];
        foreach ($searches as $search) {
            $ages["{$search[0]} - {$search[1]}"] = $this->getStudentsAgeBetweenCount($search);
        }

        $ages['37+'] = $this->getStudentsAgeCount(37);

        $result = [];
        foreach ($ages as $age => $students) {
            $result[$age] = sizeof($students);
        }

        return $result;
    }

    public function getStudentsAgeCount($age, $less = false) {
        if ($less === 'less') {
            return $result[] = ["{$age}-" => Student::all()->filter(function ($student) use ($age) {
                return $student->age <= $age;
            })];
        }

        return Student::all()->filter(function ($student) use ($age) {
            return $student->age >= $age;
        });
    }

    public function getStudentsAgeBetweenCount($between) {
        $min = $between[0];
        $max = $between[1];

        return Student::all()->filter(function ($student) use ($min, $max) {
            return $student->age >= $min && $student->age <= $max;
        });
    }
}
