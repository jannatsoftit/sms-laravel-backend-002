<?php

namespace App\Http\Controllers\Teacher\StudentFee;

use App\Http\Requests\StudentFee\StudentFeeUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\StudentFee;

class StudentFeeUpdateController extends Controller
{
  /**
   * Update studentFee.
   *
   * @param \App\Http\Requests\StudentFee\StudentFeeUpdateRequest $request
   * @param \App\Models\StudentFee $studentFee
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(StudentFeeUpdateRequest $request, StudentFee $studentFee): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'studentFee' => $studentFee->update([
                    'invoice_no' => $validated['invoice_no'],
                    'student' => $validated['student'],
                    'invoice_title' => $validated['invoice_title'],
                    'total_amount' => $validated['total_amount'],
                    'paid_amount' => $validated['paid_amount'],
                    'status' => $validated['status'],
                ]),
            ],
            'message' => 'Student Fee updated successfully.',
        ]);

    }
}
