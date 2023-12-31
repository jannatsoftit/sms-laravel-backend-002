<?php

namespace App\Http\Controllers\Teacher\ExpanseCategory;

use App\Http\Requests\ExpanseCategory\ExpanseCategoryUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ExpanseCategory;

class ExpanseCategoryUpdateController extends Controller
{
  /**
   * Update expanseCategory.
   *
   * @param \App\Http\Requests\ExpanseCategory\ExpanseCategoryUpdateRequest $request
   * @param \App\Models\ExpanseCategory $expanseCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ExpanseCategoryUpdateRequest $request, ExpanseCategory $expanseCategory): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'expanseCategory' => $expanseCategory->update([
                    "name" => $validated['name'],
                ]),
            ],
            'message' => 'Exam Category updated successfully.',
        ]);

    }
}

    // $examCategory->update($request->validated());
    // return response()->json([
    //     'data' => [
    //         'examCategory' => $examCategory,
    //     ],
    //     'message' => 'Exam Category updated successfully.',
    // ]);

