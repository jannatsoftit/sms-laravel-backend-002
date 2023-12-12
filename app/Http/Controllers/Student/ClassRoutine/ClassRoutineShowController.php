<?php

namespace App\Http\Controllers\Student\ClassRoutine;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\ClassRoutine;

class ClassRoutineShowController extends Controller
{
  /**
   * Show classRoutine.
   *
   * @param \App\Models\ClassRoutine $classRoutine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ClassRoutine $classRoutine ): JsonResponse
    {
        return response()->json([
            'data' => [
                'classRoutine' => $classRoutine,
            ],
            'message' => 'Class Routine Show Successful.',
        ]);
    }
}
