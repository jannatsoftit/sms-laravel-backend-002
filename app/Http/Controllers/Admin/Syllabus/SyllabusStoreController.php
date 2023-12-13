<?php

namespace App\Http\Controllers\Admin\Syllabus;

use App\Http\Requests\Syllabus\SyllabusStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Syllabus;

class SyllabusStoreController extends Controller
{
  /**
   * Store syllabus.
   *
   * @param \App\Http\Requests\Syllabus\SyllabusStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(SyllabusStoreRequest $request): JsonResponse
   {

    return response()->json([
        $validated = $request->validated(),
        'data' => [
                'syllabus' => Syllabus::create([
                    'class_name' => $validated['class_name'],
                    'school_id' => '1',
                    // 'subject_name' => $validated['subject_name'],
                    // 'topic' => $validated['topic'],
                    // 'paper' => $validated['paper'],
                ]),
            ],
            'message' => 'Syllabus Store Successful.',
        ]);
   }

}
