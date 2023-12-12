<?php

namespace App\Http\Controllers\Admin\NonTeachingStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\NonTeachingStaff;

class NonTeachingStaffShowController extends Controller
{
  /**
   * Show nonTeachingStaff.
   *
   * @param \App\Models\NonTeachingStaff $nonTeachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( NonTeachingStaff $nonTeachingStaff ): JsonResponse
    {
        return response()->json([
            'data' => [
                'nonTeachingStaff' => $nonTeachingStaff,
            ],
            'message' => 'Non Teaching Staff Show Successful.',
        ]);
    }
}
