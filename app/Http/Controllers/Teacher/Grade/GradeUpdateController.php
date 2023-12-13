<?php

namespace App\Http\Controllers\Teacher\Grade;

use App\Http\Requests\Grade\GradeUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Grade;

class GradeUpdateController extends Controller
{
  /**
   * Update grade.
   *
   * @param \App\Http\Requests\Grade\GradeUpdateRequest $request
   * @param \App\Models\Grade $grade
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(GradeUpdateRequest $request, Grade $grade): JsonResponse
    {
        $grade->update($request->validated());

        return response()->json([
            'data' => [
                'grade' => $grade,
            ],
            'message' => 'Grade updated successfully.',
        ]);

    }
}

