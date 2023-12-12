<?php

namespace App\Http\Controllers\Student\ExpanseCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\ExpanseCategory;

class ExpanseCategoryShowController extends Controller
{
  /**
   * Show expanseCategory.
   *
   * @param \App\Models\ExpanseCategory $expanseCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ExpanseCategory $expanseCategory ): JsonResponse
    {
        return response()->json([
            'data' => [
                'expanseCategory' => $expanseCategory,
            ],
            'message' => 'Expanse Category Show Successful.',
        ]);
    }
}
