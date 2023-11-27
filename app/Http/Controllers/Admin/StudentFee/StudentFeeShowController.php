<?php

namespace App\Http\Controllers\Admin\StudentFee;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\StudentFee;

class StudentFeeShowController extends Controller
{
  /**
   * Show studentFee.
   *
   * @param \App\Models\StudentFee $studentFee
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( StudentFee $studentFee ): JsonResponse
    {
        return response()->json([
            'data' => [
                'studentFee' => $studentFee,
            ],
            'message' => 'Student Fee Show Successful.',
        ]);
    }
}
