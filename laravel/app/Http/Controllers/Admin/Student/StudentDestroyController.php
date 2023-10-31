<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentDestroyController extends Controller
{
  /**
   * Delete student.
   *
   * @param \App\Models\User $id
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $id ): JsonResponse
    {
        $student->delete();
        return response()->json([
            'data' => [
                'student' => $student,
            ],
            'message' => 'Student Deleted Successfully.'
        ]);
    }
}
