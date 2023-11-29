<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Requests\Subject\SubjectUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Subject;

class SubjectUpdateController extends Controller
{
  /**
   * Update subject.
   *
   * @param \App\Http\Requests\Subject\SubjectUpdateRequest $request
   * @param \App\Models\Subject $subject
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SubjectUpdateRequest $request, Subject $subject): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'subject' => $subject->update([
                    'subject_name' => $validated['subject_name'],
                    'class' => $validated['class'],
                    'subject_code' => $validated['subject_code'],
                    'paper' => $validated['paper'],
                ]),
            ],
            'message' => 'Subject updated successfully.',
        ]);

    }
}
