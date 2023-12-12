<?php

namespace App\Http\Controllers\Admin\NonTeachingStaff;

use App\Http\Controllers\Controller;
use App\Http\Requests\NonTeachingStaff\NonTeachingStaffListRequest;
use App\Models\NonTeachingStaff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NonTeachingStaffListController extends Controller
{
  /**
   * List nonTeachingStaff.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(NonTeachingStaffListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'nonTeachingStaffs' => NonTeachingStaff::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'name',
                        'designation',
                        'image',
                    ],
                ),
            ],

            'message' => 'Non Teaching Staff list successful.',
        ]);
    }

 }
