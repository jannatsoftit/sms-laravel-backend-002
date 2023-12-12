<?php

namespace App\Http\Controllers\Student\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolShowController extends Controller
{
  /**
   * Show school.
   *
   * @param \App\Models\School $school
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( School $school ): JsonResponse
    {
        if(School::where('school_id', 1)){

            return response()->json([
                'data' => [
                    'school' => $school,
                ],
                'message' => 'Abdul Gafur School Show Successful.',
            ]);

        }elseif(School::where('school_id', 2)) {

            return response()->json([
                'data' => [
                    'school' => $school,
                ],
                'message' => 'Ghatail Cantonment English School Show Successful.',
            ]);

        }

    }

}
