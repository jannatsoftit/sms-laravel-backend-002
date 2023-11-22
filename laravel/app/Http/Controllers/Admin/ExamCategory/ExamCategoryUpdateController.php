<?php

namespace App\Http\Controllers\Admin\ExamCategory;

use App\Http\Requests\ExamCategory\ExamCategoryUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\ExamCategory;

class ExamCategoryUpdateController extends Controller
{
  /**
   * Update examCategory.
   *
   * @param \App\Http\Requests\ExamCategory\ExamCategoryUpdateRequest $request
   * @param \App\Models\ExamCategory $examCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ExamCategoryUpdateRequest $request, ExamCategory $examCategory): JsonResponse
    {

        return response()->json([
            $validated = $request->validated(),
            'data' => [
                'examCategory' => $examCategory->update([
                    "title" => $validated['title'],
                    "class_name" => $validated['class_name'],
                    "section_name" => $validated['section_name'],
                ]),
            ],
            'message' => 'Exam Category updated successfully.',
        ]);
        
    }
}
