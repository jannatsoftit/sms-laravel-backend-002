<?php

namespace App\Http\Controllers\Admin\ClassRoutine;

use App\Http\Requests\ClassRoutine\ClassRoutineStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ClassRoutine;

class ClassRoutineStoreController extends Controller
{
  /**
   * Store classRoutine.
   *
   * @param \App\Http\Requests\ClassRoutine\ClassRoutineStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(ClassRoutineStoreRequest $request): JsonResponse
   {

    return response()->json([
        $validated = $request->validated(),
        'data' => [
                'classRoutine' => ClassRoutine::create([
                    'day' => $validated['day'],
                    'class_name' => $validated['class_name'],
                    'subject_name' => $validated['subject_name'],
                    'paper' => $validated['paper'],
                    'class_time' => $validated['class_time'],
                ]),
            ],
            'message' => 'Class Routine Store Successful.',
        ]);
   }

}
