<?php

namespace App\Http\Controllers\Admin\StudentFee;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentFee\StudentFeeListRequest;
use App\Models\StudentFee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentFeeListController extends Controller
{
  /**
   * List studentFee.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(StudentFeeListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'studentFees' => StudentFee::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'invoice_no',
                        'student',
                        'invoice_title',
                        'total_amount',
                        'paid_amount',
                        'status',
                    ],
                ),
            ],

            'message' => 'Student Fee list successful.',
        ]);
    }

 }
