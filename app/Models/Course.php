<?php

namespace App\Models;

use App\Traits\Image\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasImage;

    protected $fillable = ['project_id', 'name', 'description', 'image', 'lesson_plan', 'status'];
    protected $filesDirectory = 'courses';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        static::deleted(function (Model $model) {
            Storage::disk('public')->delete($model->attributes['lesson_plan']);
        });
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function setLessonPlanAttribute($value)
    {
        if ($value instanceof UploadedFile && isset($this->attributes['lesson_plan'])) {
            Storage::disk('public')->delete($this->attributes['lesson_plan']);
        }

        $this->attributes['lesson_plan'] = Storage::disk('public')->putFile($this->filesDirectory, $value);
    }

    public function getLessonPlanAttribute($value)
    {
        if (!$value) {
            return null;
        }

        return Storage::disk('public')->url($value);
    }

}
