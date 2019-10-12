<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::teacher()->get();

        return UserResource::collection($teachers);
    }

    public function show($id)
    {
        $teacher = User::teacher()->findOrFail($id);

        return new UserResource($teacher);
    }
}
