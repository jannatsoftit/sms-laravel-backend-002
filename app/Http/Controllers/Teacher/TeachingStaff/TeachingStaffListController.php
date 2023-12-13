<?php

namespace App\Http\Controllers\Teacher\TeachingStaff;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeachingStaff\TeachingStaffListRequest;
use App\Models\TeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeachingStaffListController extends Controller
{
  /**
   * List teachingStaff.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(TeachingStaffListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'teachingStaffs' => TeachingStaff::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'name',
                        'designation',
                        'image',
                    ],
                ),
            ],

            'message' => 'Teaching Staff list successful.',
        ]);
    }

 }
