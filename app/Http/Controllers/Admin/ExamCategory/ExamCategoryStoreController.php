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
           $validated = $request->validated(),
           'data' => [
                'examCategory' => ExamCategory::create([
                    'title' => $validated['title'],
                ]),
            ],
            'message' => 'Exam Category Store Successful.',
        ]);
   }

}
