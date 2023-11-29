<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeacherDestroyController extends Controller
{
  /**
   * Delete Teacher.
   *
   * @param \App\Models\User $teacher
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $teacher ): JsonResponse
    {
        $teacher->delete();

        return response()->json([
            'data' => [
                'teacher' => $teacher,
            ],
            'message' => 'Teacher is Deleted Successfully.'
        ]);
    }
}
