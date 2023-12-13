<?php

namespace App\Http\Controllers\Teacher\School;

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


    // return response()->json([
    //     'data' => [
    //         'school' => School::where('school_id', 1)->get(
    //             $columns = [
    //                 'id',
    //                 'first_name',
    //                 'last_name',
    //                 'email',
    //                 'designation',
    //                 'department',
    //                 'password',
    //                 'user_information',
    //                 'image',
    //                 'gender',
    //             ],
    //         ),
    //     ],

    //     'message' => 'School list successful.',
    // ]);

    // return response()->json([
    //     'data' => [
    //         'school' => $school,
    //     ],
    //     'message' => 'School Show Successful.',
    // ]);

    }





}
