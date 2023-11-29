<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Requests\Mark\MarkStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Mark;

class MarkStoreController extends Controller
{
  /**
   * Store mark.
   *
   * @param \App\Http\Requests\Mark\MarkStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(MarkStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'mark' => Mark::create([
                    'student_name' => $validated['student_name'],
                    'total_marks' => $validated['total_marks'],
                    'grade_point' => $validated['grade_point'],
                    'class_name' => $validated['class_name'],
                    'letter_grade' => $validated['letter_grade'],
                    'section' => $validated['section'],
                    'comment' => $validated['comment'],
                ]),
            ],
            'message' => 'Mark Store Successful.',
        ]);
   }

}
