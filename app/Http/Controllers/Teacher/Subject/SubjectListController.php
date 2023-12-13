<?php

namespace App\Http\Controllers\Teacher\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\SubjectListRequest;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubjectListController extends Controller
{
  /**
   * List subject.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SubjectListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'subjects' => Subject::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'subject_name',
                        'class',
                        'subject_code',
                        'paper',
                    ],
                ),
            ],

            'message' => 'Subject list successful.',
        ]);
    }

 }
