<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Requests\Mark\MarkUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Mark;

class MarkUpdateController extends Controller
{
  /**
   * Update mark.
   *
   * @param \App\Http\Requests\Mark\MarkUpdateRequest $request
   * @param \App\Models\Mark $mark
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(MarkUpdateRequest $request, Mark $mark): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'mark' => $mark->update([
                    'student_name' => $validated['student_name'],
                    'total_marks' => $validated['total_marks'],
                    'grade_point' => $validated['grade_point'],
                    'class_name' => $validated['class_name'],
                    'letter_grade' => $validated['letter_grade'],
                    'section' => $validated['section'],
                    'comment' => $validated['comment'],
                ]),
            ],
            'message' => 'Mark updated successfully.',
        ]);

    }
}
