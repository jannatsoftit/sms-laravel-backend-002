<?php

namespace App\Http\Controllers\Admin\ExpanseCategory;

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
        $expanseCategory->update($request->validated());

        return response()->json([
            'data' => [
                'expanseCategory' => $expanseCategory,
            ],
            'message' => 'Expanse Category updated successfully.',
        ]);

    }
}

