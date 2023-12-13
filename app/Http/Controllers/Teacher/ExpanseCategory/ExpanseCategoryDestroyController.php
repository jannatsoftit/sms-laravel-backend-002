<?php

namespace App\Http\Controllers\Teacher\ExpanseCategory;

use App\Http\Controllers\Controller;
use App\Models\ExpanseCategory;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class ExpanseCategoryDestroyController extends Controller
{
  /**
   * Delete expanseCategory.
   *
   * @param \App\Models\ExpanseCategory $expanseCategory
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ExpanseCategory $expanseCategory ): JsonResponse
    {
        $expanseCategory->delete();

        return response()->json([
            'data' => [
                '$expanseCategory' => $expanseCategory,
            ],
            'message' => 'Expanse Category Deleted Successfully.'
        ]);
    }
}
