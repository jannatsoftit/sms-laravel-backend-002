<?php

namespace App\Http\Controllers\Student\HSTeachingStaff;

use App\Http\Controllers\Controller;
use App\Http\Requests\HSTeachingStaff\HSTeachingStaffListRequest;
use App\Models\HSTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HSTeachingStaffListController extends Controller
{
  /**
   * List hsteachingStaff.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(HSTeachingStaffListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'hsteachingStaffs' => HSTeachingStaff::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'name',
                        'designation',
                        'image',
                    ],
                ),
            ],

            'message' => 'HSTeaching Staff list successful.',
        ]);
    }

 }
