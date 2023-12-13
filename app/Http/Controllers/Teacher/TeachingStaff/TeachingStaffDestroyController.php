<?php

namespace App\Http\Controllers\Teacher\TeachingStaff;

use App\Http\Controllers\Controller;
use App\Models\TeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeachingStaffDestroyController extends Controller
{
  /**
   * Delete teachingStaff.
   *
   * @param \App\Models\TeachingStaff $teachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( TeachingStaff $teachingStaff ): JsonResponse
    {
        $teachingStaff->delete();

        return response()->json([
            'data' => [
                'teachingStaff' => $teachingStaff,
            ],
            'message' => 'Teaching Staff is Deleted Successfully.'
        ]);
    }
}
