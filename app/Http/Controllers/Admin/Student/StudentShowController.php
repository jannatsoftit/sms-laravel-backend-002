<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentShowController extends Controller
{
  /**
   * Show student.
   *
   * @param \App\Models\User $student
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $student ): JsonResponse
    {
        return response()->json([
            'data' => [
                'student' => $student,
            ],
            'message' => 'Student Show Successful.',
        ]);
    }

}
