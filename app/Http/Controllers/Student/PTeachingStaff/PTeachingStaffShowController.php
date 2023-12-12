<?php

namespace App\Http\Controllers\Admin\PTeachingStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\PTeachingStaff;

class PTeachingStaffShowController extends Controller
{
  /**
   * Show pteachingStaff.
   *
   * @param \App\Models\PTeachingStaff $pteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( PTeachingStaff $pteachingStaff ): JsonResponse
    {
        return response()->json([
            'data' => [
                'pteachingStaff' => $pteachingStaff,
            ],
            'message' => 'PTeaching Staff Show Successful.',
        ]);
    }
}
