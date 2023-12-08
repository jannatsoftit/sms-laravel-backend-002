<?php

namespace App\Http\Controllers\Admin\ClassRoutine;

use App\Http\Requests\ClassRoutine\ClassRoutineUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ClassRoutine;

class ClassRoutineUpdateController extends Controller
{
  /**
   * Update classRoutine.
   *
   * @param \App\Http\Requests\ClassRoutine\ClassRoutineUpdateRequest $request
   * @param \App\Models\ClassRoutine $classRoutine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ClassRoutineUpdateRequest $request, ClassRoutine $classRoutine): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'classRoutine' => $classRoutine->update([
                    'class_name' => $validated['class_name'],
                    // 'day' => $validated['day'],
                    // 'subject_name' => $validated['subject_name'],
                    // 'paper' => $validated['paper'],
                    // 'class_time' => $validated['class_time'],
                ]),
            ],
            'message' => 'Class Routine updated successfully.',
        ]);

    }
}
