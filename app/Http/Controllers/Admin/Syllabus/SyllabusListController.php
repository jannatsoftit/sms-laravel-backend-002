<?php

namespace App\Http\Controllers\Admin\Syllabus;

use App\Http\Controllers\Controller;
use App\Http\Requests\Syllabus\SyllabusListRequest;
use App\Models\Syllabus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SyllabusListController extends Controller
{
  /**
   * List syllabus.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(SyllabusListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'syllabuses' => Syllabus::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'class_name',
                        // 'subject_name',
                        // 'topic',
                        // 'paper',
                    ],
                ),
            ],

            'message' => 'Syllabus list successful.',
        ]);
    }

 }
