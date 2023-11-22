<?php

namespace App\Http\Controllers\Admin\ExamCategory;

use App\Http\Requests\ExamCategory\ExamCategoryStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ExamCategory;

class ExamCategoryStoreController extends Controller
{
  /**
   * Store examCategory.
   *
   * @param \App\Http\Requests\ExamCategory\ExamCategoryStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(ExamCategoryStoreRequest $request): JsonResponse
   {
        return response()->json([
            'data' => [
                'examCategory' => ExamCategory::create([
                    'title' => $request->title,
                    'class_name' => $request->class_name,
                    'section_name' => $request->section_name,
                ]
                ),
            ],
            'message' => 'Exam Category Store Successful.',
        ]);
   }

}
