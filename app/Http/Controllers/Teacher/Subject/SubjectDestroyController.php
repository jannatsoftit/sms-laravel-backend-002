<?php

namespace App\Http\Controllers\Teacher\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class SubjectDestroyController extends Controller
{
  /**
   * Delete subject.
   *
   * @param \App\Models\Subject $subject
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Subject $subject ): JsonResponse
    {
        $subject->delete();

        return response()->json([
            'data' => [
                'subject' => $subject,
            ],
            'message' => 'Subject Deleted Successfully.'
        ]);
    }
}
