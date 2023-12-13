<?php

namespace App\Http\Controllers\Teacher\SchoolMagazine;

use App\Http\Controllers\Controller;
use App\Models\SchoolMagazine;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class SchoolMagazineDestroyController extends Controller
{
  /**
   * Delete schoolMagazine.
   *
   * @param \App\Models\SchoolMagazine $schoolMagazine
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( SchoolMagazine $schoolMagazine ): JsonResponse
    {
        $schoolMagazine->delete();

        return response()->json([
            'data' => [
                'schoolMagazine' => $schoolMagazine,
            ],
            'message' => 'School Magazine Deleted Successfully.'
        ]);
    }
}
