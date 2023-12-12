<?php

namespace App\Http\Controllers\Admin\PTeachingStaff;

use App\Http\Controllers\Controller;
use App\Http\Requests\PTeachingStaff\PTeachingStaffListRequest;
use App\Models\PTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PTeachingStaffListController extends Controller
{
  /**
   * List pteachingStaff.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(PTeachingStaffListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'pteachingStaffs' => PTeachingStaff::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'name',
                        'designation',
                        'image',
                    ],
                ),
            ],

            'message' => 'PTeaching Staff list successful.',
        ]);
    }

 }
