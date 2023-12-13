<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Requests\Mark\MarkStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Mark;

class MarkStoreController extends Controller
{
  /**
   * Store mark.
   *
   * @param \App\Http\Requests\Mark\MarkStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(MarkStoreRequest $request): JsonResponse
   {
       return response()->json([
           'data' => [
                'mark' => Mark::create([
                    'student_name' => $request->student_name,
                    'class_name' => $request->class_name,
                    'school_id' => '1',
                ]),
            ],
            'message' => 'Mark Store Successful.',
        ]);
    }

}
