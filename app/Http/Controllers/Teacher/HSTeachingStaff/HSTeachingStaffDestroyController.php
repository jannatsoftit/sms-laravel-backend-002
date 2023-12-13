<?php

namespace App\Http\Controllers\Teacher\HSTeachingStaff;

use App\Http\Controllers\Controller;
use App\Models\HSTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HSTeachingStaffDestroyController extends Controller
{
  /**
   * Delete hsteachingStaff.
   *
   * @param \App\Models\HSTeachingStaff $hsteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( HSTeachingStaff $hsteachingStaff ): JsonResponse
    {
        $hsteachingStaff->delete();

        return response()->json([
            'data' => [
                'hsteachingStaff' => $hsteachingStaff,
            ],
            'message' => 'HSTeaching Staff is Deleted Successfully.'
        ]);
    }
}
