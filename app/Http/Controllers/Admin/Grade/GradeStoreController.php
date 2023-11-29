<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Requests\Grade\GradeStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Grade;

class GradeStoreController extends Controller
{
  /**
   * Store grade.
   *
   * @param \App\Http\Requests\Grade\GradeStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(GradeStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'grade' => Grade::create([
                    'grade_point' => $validated['grade_point'],
                    'letter_grade' => $validated['letter_grade'],
                    'marks_interval' => $validated['marks_interval'],
                ]),
            ],
            'message' => 'Grade Store Successful.',
        ]);
   }

}
