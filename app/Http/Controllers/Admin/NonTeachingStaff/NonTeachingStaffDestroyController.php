<?php

namespace App\Http\Controllers\Admin\NonTeachingStaff;

use App\Http\Controllers\Controller;
use App\Models\NonTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NonTeachingStaffDestroyController extends Controller
{
  /**
   * Delete nonTeachingStaff.
   *
   * @param \App\Models\NonTeachingStaff $nonTeachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( NonTeachingStaff $nonTeachingStaff ): JsonResponse
    {
        $nonTeachingStaff->delete();

        return response()->json([
            'data' => [
                'nonTeachingStaff' => $nonTeachingStaff,
            ],
            'message' => 'Non Teaching Staff is Deleted Successfully.'
        ]);
    }
}
