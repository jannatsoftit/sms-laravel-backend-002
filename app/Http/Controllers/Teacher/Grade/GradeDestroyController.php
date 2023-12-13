<?php

namespace App\Http\Controllers\Teacher\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class GradeDestroyController extends Controller
{
  /**
   * Delete grade.
   *
   * @param \App\Models\Grade $grade
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Grade $grade ): JsonResponse
    {
        $grade->delete();

        return response()->json([
            'data' => [
                'grade' => $grade,
            ],
            'message' => 'Grade Deleted Successfully.'
        ]);
    }
}
