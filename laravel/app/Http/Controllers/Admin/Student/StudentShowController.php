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
   * @param \App\Models\User $id
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $id ): JsonResponse
    {
        return response()->json([
            'data' => [
                'student' => $id,
            ],
            'message' => 'Student Show Successful.',
        ]);
    }

}
