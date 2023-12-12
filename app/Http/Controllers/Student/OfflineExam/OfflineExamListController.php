<?php

namespace App\Http\Controllers\Admin\OfflineExam;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfflineExam\OfflineExamListRequest;
use App\Models\OfflineExam;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OfflineExamListController extends Controller
{
  /**
   * List offlineExam.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(OfflineExamListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'offlineExams' => OfflineExam::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'exam_name',
                        //'class_name',
                        'exam_start_time',
                        'exam_end_time',
                        'total_marks',
                        // 'paper',
                        // 'section',
                        // 'subject_code',
                        // 'date_time',
                        // 'building_name',
                        // 'room_number',
                    ],
                ),
            ],

            'message' => 'Offline Exam list successful.',
        ]);
    }

 }
