<?php


namespace App\Repositories\Lesson;

use App\Models\Lesson;
use App\Repositories\AbstractRepository;
use App\Repositories\Attendance\AttendanceRepository;
use Illuminate\Database\Eloquent\Model;

class LessonRepository extends AbstractRepository
{
    protected $model = Lesson::class;
    /**
     * @var AttendanceRepository
     */
    private $attendanceRepository;

    public function __construct(AttendanceRepository $attendanceRepository)
    {
        $this->attendanceRepository = $attendanceRepository;
    }

    public function create($data) : Model
    {
        $model = parent::create($data);

        $model->attendances()->createMany($data['attendances']);

        return $model;
    }

    public function update(Model $model, $data) : Model
    {
        $model->fill($data->only($model->getFillable()));
        $model->save();

        if ($data['attendances']) {
            
        }

        return $model;
    }

}
