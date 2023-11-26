<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Requests\Subject\SubjectStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Subject;

class SubjectStoreController extends Controller
{
  /**
   * Store subject.
   *
   * @param \App\Http\Requests\Subject\SubjectStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(SubjectStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'subject' => Subject::create([
                    'subject_name' => $validated['subject_name'],
                    'class' => $validated['class'],
                    'subject_code' => $validated['subject_code'],
                    'paper' => $validated['paper'],
                ]),
            ],
            'message' => 'Subject Store Successful.',
        ]);
   }

}
