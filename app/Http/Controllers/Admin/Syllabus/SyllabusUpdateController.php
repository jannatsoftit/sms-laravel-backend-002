<?php

namespace App\Http\Controllers\Admin\Syllabus;

use App\Http\Requests\Syllabus\SyllabusUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Syllabus;

class SyllabusUpdateController extends Controller
{
  /**
   * Update syllabus.
   *
   * @param \App\Http\Requests\Syllabus\SyllabusUpdateRequest $request
   * @param \App\Models\Syllabus $syllabus
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SyllabusUpdateRequest $request, Syllabus $syllabus): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'syllabus' => $syllabus->update([
                    'class_name' => $validated['class_name'],
                    'subject_name' => $validated['subject_name'],
                    'topic' => $validated['topic'],
                    'paper' => $validated['paper'],
                ]),
            ],
            'message' => 'Syllabus updated successfully.',
        ]);

    }
}
