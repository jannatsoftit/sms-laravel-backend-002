<?php

namespace App\Http\Controllers\Teacher\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectShowController extends Controller
{
  /**
   * Show subject.
   *
   * @param \App\Models\Subject $subject
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Subject $subject ): JsonResponse
    {
        return response()->json([
            'data' => [
                'subject' => $subject,
            ],
            'message' => 'Subject Show Successful.',
        ]);
    }
}
