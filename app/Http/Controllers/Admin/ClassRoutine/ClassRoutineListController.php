<?php

namespace App\Http\Controllers\Admin\ClassRoutine;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoutine\ClassRoutineListRequest;
use App\Models\ClassRoutine;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClassRoutineListController extends Controller
{
  /**
   * List classRoutine.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ClassRoutineListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'classRoutines' => ClassRoutine::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'day',
                        'class_name',
                        'subject_name',
                        'paper',
                        'class_time',
                    ],
                ),
            ],

            'message' => 'Class Routine list successful.',
        ]);
    }

 }
