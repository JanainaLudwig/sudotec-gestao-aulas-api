<?php


namespace App\Repositories\Attendance;


use App\Models\Attendance;
use App\Repositories\AbstractRepository;
use Illuminate\Database\Eloquent\Model;

class AttendanceRepository extends AbstractRepository
{
    protected $model = Attendance::class;

    public function create($data) : Model
    {
        $model = parent::create($data);

//        if ($model->presence === 'P') {
//            $model->justification()->createOruP([
//                'justification' => $data['justification'],
//            ]);
//        }

        return $model;
    }
}
