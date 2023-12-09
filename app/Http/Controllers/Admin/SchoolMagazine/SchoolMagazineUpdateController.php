<?php

namespace App\Http\Controllers\Admin\SchoolMagazine;

use App\Http\Requests\SchoolMagazine\SchoolMagazineUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\SchoolMagazine;

class SchoolMagazineUpdateController extends Controller
{
  /**
   * Update schoolMagazine.
   *
   * @param \App\Http\Requests\SchoolMagazine\SchoolMagazineUpdateRequest $request
   * @param \App\Models\SchoolMagazine $schoolMagazine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SchoolMagazineUpdateRequest $request, SchoolMagazine $schoolMagazine): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'schoolMagazine' => $schoolMagazine->update([
                    'magazine_name' => $validated['magazine_name'],
                ]),
            ],
            'message' => 'School Magazine updated successfully.',
        ]);

    }
}
