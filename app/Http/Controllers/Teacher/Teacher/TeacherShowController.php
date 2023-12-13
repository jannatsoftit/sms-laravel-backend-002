<?php

namespace App\Http\Controllers\Teacher\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class TeacherShowController extends Controller
{
  /**
   * Show Teacher.
   *
   * @param \App\Models\User $teacher
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $teacher ): JsonResponse
    {
        return response()->json([
            'data' => [
                'teacher' => $teacher,
            ],
            'message' => 'Teacher Show Successful.',
        ]);
    }
}
