<?php

namespace App\Http\Controllers\Admin\StudentFee;

use App\Http\Requests\StudentFee\StudentFeeStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\StudentFee;

class StudentFeeStoreController extends Controller
{
  /**
   * Store studentFee.
   *
   * @param \App\Http\Requests\StudentFee\StudentFeeStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(StudentFeeStoreRequest $request): JsonResponse
   {

    return response()->json([
        $validated = $request->validated(),
        'data' => [
                'studentFee' => StudentFee::create([
                    'invoice_no' => $validated['invoice_no'],
                    'student' => $validated['student'],
                    'invoice_title' => $validated['invoice_title'],
                    'total_amount' => $validated['total_amount'],
                    'paid_amount' => $validated['paid_amount'],
                    'status' => $validated['status'],
                ]),
            ],
            'message' => 'Student Fee Store Successful.',
        ]);
   }

}
