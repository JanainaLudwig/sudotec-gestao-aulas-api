<?php


namespace App\Repositories\Student;


use App\Models\Student;
use App\Repositories\AbstractRepository;

class StudentRepository extends AbstractRepository
{
    protected $model = Student::class;
}
