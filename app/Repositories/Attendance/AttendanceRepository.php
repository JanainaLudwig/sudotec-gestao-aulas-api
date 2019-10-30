<?php


namespace App\Repositories\Attendance;


use App\Models\Attendance;
use App\Repositories\AbstractRepository;
use DemeterChain\A;
use Illuminate\Database\Eloquent\Model;

class AttendanceRepository extends AbstractRepository
{
    protected $model = Attendance::class;

    public function create($data) : Model
    {
        $model = parent::create($data);

        if ($model->needsJustification()) {
            $this->createJustification($model, $data['justification']);
        }

        return $model;
    }

    public function update(Model $model, $data): Model
    {
        if ($model->justification) {
            $model->justification()->delete();
        }

        parent::update($model, $data);

        if ($model->needsJustification()) {
            $this->createJustification($model, $data['justification']);
        }

        return $model;
    }

    private function createJustification($model, $justification)
    {
        $model->justification()->create([
            'justification' => $justification,
        ]);
    }
}
