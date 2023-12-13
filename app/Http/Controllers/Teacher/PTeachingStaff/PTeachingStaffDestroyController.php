<?php

namespace App\Http\Controllers\Teacher\PTeachingStaff;

use App\Http\Controllers\Controller;
use App\Models\PTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PTeachingStaffDestroyController extends Controller
{
  /**
   * Delete pteachingStaff.
   *
   * @param \App\Models\PTeachingStaff $pteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( PTeachingStaff $pteachingStaff ): JsonResponse
    {
        $pteachingStaff->delete();

        return response()->json([
            'data' => [
                'pteachingStaff' => $pteachingStaff,
            ],
            'message' => 'PTeaching Staff is Deleted Successfully.'
        ]);
    }
}
