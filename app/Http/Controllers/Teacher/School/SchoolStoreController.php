<?php

namespace App\Http\Controllers\Teacher\School;

use App\Http\Requests\School\SchoolStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\School;

class SchoolStoreController extends Controller
{
  /**
   * Store school.
   *
   * @param \App\Http\Requests\School\SchoolStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(SchoolStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'school' => School::create([
                    'title' => $validated['title'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'],
                    'address' => $validated['address'],
                    'facebook_page' => $validated['facebook_page'],
                    'status' => $validated['status'],
                ]),
            ],
            'message' => 'School Store Successful.',
        ]);
   }

}
