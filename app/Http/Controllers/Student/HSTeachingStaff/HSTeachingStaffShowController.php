<?php

namespace App\Http\Controllers\Student\HSTeachingStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\HSTeachingStaff;

class HSTeachingStaffShowController extends Controller
{
  /**
   * Show hsteachingStaff.
   *
   * @param \App\Models\HSTeachingStaff $hsteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( HSTeachingStaff $hsteachingStaff ): JsonResponse
    {
        return response()->json([
            'data' => [
                'hsteachingStaff' => $hsteachingStaff,
            ],
            'message' => 'HSTeaching Staff Show Successful.',
        ]);
    }
}
