<?php

namespace App\Http\Controllers\Admin\ExpanseCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpanseCategory\ExpanseCategoryListRequest;
use App\Models\ExpanseCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExpanseCategoryListController extends Controller
{
  /**
   * List expanseCategory.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ExpanseCategoryListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'expanseCategorys' => ExpanseCategory::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'title',
                    ],
                ),
            ],

            'message' => 'Expanse Category list successful.',
        ]);
    }

 }
