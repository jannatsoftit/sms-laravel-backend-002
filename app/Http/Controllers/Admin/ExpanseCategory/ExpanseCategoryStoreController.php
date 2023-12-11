<?php

namespace App\Http\Controllers\Admin\ExpanseCategory;

use App\Http\Requests\ExpanseCategory\ExpanseCategoryStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ExpanseCategory;

class ExpanseCategoryStoreController extends Controller
{
  /**
   * Store expanseCategory.
   *
   * @param \App\Http\Requests\ExpanseCategory\ExpanseCategoryStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(ExpanseCategoryStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'expanseCategory' => ExpanseCategory::create([
                    'title' => $validated['title'],
                ]),
            ],
            'message' => 'Expanse Category Store Successful.',
        ]);
   }

}
