<?php

namespace App\Http\Controllers\Teacher\SchoolMagazine;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\SchoolMagazine;

class SchoolMagazineShowController extends Controller
{
  /**
   * Show schoolMagazine.
   *
   * @param \App\Models\SchoolMagazine $schoolMagazine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( SchoolMagazine $schoolMagazine ): JsonResponse
    {
        return response()->json([
            'data' => [
                'schoolMagazine' => $schoolMagazine,
            ],
            'message' => 'School Magazine Show Successful.',
        ]);
    }
}
