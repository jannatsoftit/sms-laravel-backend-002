<?php

namespace App\Http\Controllers\Admin\SchoolMagazine;

use App\Http\Requests\SchoolMagazine\SchoolMagazineStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\SchoolMagazine;

class SchoolMagazineStoreController extends Controller
{
  /**
   * Store schoolMagazine.
   *
   * @param \App\Http\Requests\SchoolMagazine\SchoolMagazineStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(SchoolMagazineStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'schoolMagazine' => SchoolMagazine::create([
                    'magazine_name' => $validated['magazine_name'],
                ]),
            ],
            'message' => 'School Magazine Store Successful.',
        ]);
   }

}
