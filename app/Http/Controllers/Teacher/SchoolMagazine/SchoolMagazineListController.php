<?php

namespace App\Http\Controllers\Teacher\SchoolMagazine;

use App\Http\Controllers\Controller;
use App\Http\Requests\SchoolMagazine\SchoolMagazineListRequest;
use App\Models\SchoolMagazine;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SchoolMagazineListController extends Controller
{
  /**
   * List schoolMagazine.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SchoolMagazineListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'schoolMagazines' => SchoolMagazine::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'magazine_name',
                    ],
                ),
            ],

            'message' => 'School Magazine list successful.',
        ]);
    }

 }
