<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Http\Requests\Grade\GradeListRequest;
use App\Models\Grade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GradeListController extends Controller
{
  /**
   * List grade.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(GradeListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'grades' => Grade::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'grade_point',
                        'letter_grade',
                        'marks_interval',
                    ],
                ),
            ],

            'message' => 'Grade list successful.',
        ]);
    }

 }
