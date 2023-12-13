<?php

namespace App\Http\Controllers\Teacher\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Grade;

class GradeShowController extends Controller
{
  /**
   * Show grade.
   *
   * @param \App\Models\Grade $grade
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Grade $grade ): JsonResponse
    {
        return response()->json([
            'data' => [
                'grade' => $grade,
            ],
            'message' => 'Grade Show Successful.',
        ]);
    }
}
