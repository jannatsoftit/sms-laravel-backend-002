<?php

namespace App\Http\Controllers\Teacher\StudentFee;

use App\Http\Controllers\Controller;
use App\Models\StudentFee;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class StudentFeeDestroyController extends Controller
{
  /**
   * Delete studentFee.
   *
   * @param \App\Models\StudentFee $studentFee
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( StudentFee $studentFee ): JsonResponse
    {
        $studentFee->delete();

        return response()->json([
            'data' => [
                'studentFee' => $studentFee,
            ],
            'message' => 'Student Fee Deleted Successfully.'
        ]);
    }
}
