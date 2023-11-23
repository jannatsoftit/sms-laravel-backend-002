<?php

namespace App\Http\Controllers\Admin\ExamCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\ExamCategory;

class ExamCategoryShowController extends Controller
{
  /**
   * Show examCategory.
   *
   * @param \App\Models\ExamCategory $examCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ExamCategory $examCategory ): JsonResponse
    {
        return response()->json([
            'data' => [
                'examCategory' => $examCategory,
            ],
            'message' => 'Exam Category Show Successful.',
        ]);
    }
}
