<?php

namespace App\Http\Controllers\Teacher\School;

use App\Http\Controllers\Controller;
use App\Http\Requests\School\SchoolListRequest;
use App\Models\School;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SchoolListController extends Controller
{
  /**
   * List school.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SchoolListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'schools' => School::where('id', 1)->get(
                    $columns = [
                        'id',
                        'title',
                        'email',
                        'phone',
                        'address',
                        'facebook_page',
                        'status',
                    ],
                ),
            ],

            'message' => 'School list successful.',
        ]);
    }

 }
