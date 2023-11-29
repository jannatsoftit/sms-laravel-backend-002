<?php

namespace App\Http\Controllers\Admin\ExamCategory;

use App\Http\Controllers\Controller;
use App\Models\ExamCategory;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class ExamCategoryDestroyController extends Controller
{
  /**
   * Delete ExamCategory.
   *
   * @param \App\Models\ExamCategory $examCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ExamCategory $examCategory ): JsonResponse
    {
        $examCategory->delete();

        return response()->json([
            'data' => [
                'examCategory' => $examCategory,
            ],
            'message' => 'Exam Category Deleted Successfully.'
        ]);
    }
}
