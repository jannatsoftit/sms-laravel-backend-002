<?php

namespace App\Http\Controllers\Admin\School;

use App\Http\Requests\School\SchoolUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\School;

class SchoolUpdateController extends Controller
{
  /**
   * Update school.
   *
   * @param \App\Http\Requests\School\SchoolUpdateRequest $request
   * @param \App\Models\School $school
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SchoolUpdateRequest $request, School $school): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'school' => $school->update([
                    'title' => $validated['title'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'],
                    'address' => $validated['address'],
                    'facebook_page' => $validated['facebook_page'],
                    'status' => $validated['status'],
                ]),
            ],
            'message' => 'School updated successfully.',
        ]);

    }
}
