<?php

namespace App\Http\Controllers\Admin\ExamCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamCategory\ExamCategoryListRequest;
use App\Models\ExamCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExamCategoryListController extends Controller
{
  /**
   * List examCategory.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ExamCategoryListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'examCategories' => ExamCategory::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'title',
                        'class_name',
                        'section_name',
                    ],
                ),
            ],

            'message' => 'Exam Category list successful.',
        ]);
    }

 }
