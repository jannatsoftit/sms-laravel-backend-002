<?php

namespace App\Http\Controllers\Student\Mark;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mark\MarkListRequest;
use App\Models\Mark;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MarkListController extends Controller
{
  /**
   * List mark.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(MarkListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'marks' => Mark::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'student_name',
                        'class_name',
                        //'file',
                    ],
                ),
            ],

            'message' => 'Mark list successful.',
        ]);
    }

 }
