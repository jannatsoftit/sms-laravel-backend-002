<?php

namespace App\Http\Controllers\Student\TeachingStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\TeachingStaff;

class TeachingStaffShowController extends Controller
{
  /**
   * Show teachingStaff.
   *
   * @param \App\Models\TeachingStaff $teachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( TeachingStaff $teachingStaff ): JsonResponse
    {
        return response()->json([
            'data' => [
                'teachingStaff' => $teachingStaff,
            ],
            'message' => 'Teaching Staff Show Successful.',
        ]);
    }
}
