<?php


namespace App\Repositories\Lesson;

use App\Models\Attendance;
use App\Models\Lesson;
use App\Repositories\AbstractRepository;
use App\Repositories\Attendance\AttendanceRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

        foreach ($data['attendances'] as $attendance) {
            $this->attendanceRepository
                ->create(new Request(array_merge($attendance, ['lesson_id' => $model->id])));
        }

        return $model;
    }

    public function update(Model $model, $data) : Model
    {
        $model->fill($data->only($model->getFillable()));
        $model->save();

        if ($data['attendances']) {
            foreach ($data['attendances'] as $attendance) {
                $this->attendanceRepository
                    ->update(
                        Attendance::find($attendance['id']),
                        new Request(array_merge($attendance, ['lesson_id' => $model->id]))
                    );
            }
        }

        return $model;
    }

}
