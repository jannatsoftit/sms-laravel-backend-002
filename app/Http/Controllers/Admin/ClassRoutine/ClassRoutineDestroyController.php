<?php

namespace App\Http\Controllers\Admin\ClassRoutine;

use App\Http\Controllers\Controller;
use App\Models\ClassRoutine;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class ClassRoutineDestroyController extends Controller
{
  /**
   * Delete classRoutine.
   *
   * @param \App\Models\ClassRoutine $classRoutine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ClassRoutine $classRoutine ): JsonResponse
    {
        $classRoutine->delete();

        return response()->json([
            'data' => [
                'classRoutine' => $classRoutine,
            ],
            'message' => 'Class Routine Deleted Successfully.'
        ]);
    }
}
