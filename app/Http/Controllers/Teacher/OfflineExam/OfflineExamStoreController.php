<?php

namespace App\Http\Controllers\Teacher\OfflineExam;

use App\Http\Requests\OfflineExam\OfflineExamStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\OfflineExam;

class OfflineExamStoreController extends Controller
{
  /**
   * Store offlineExam.
   *
   * @param \App\Http\Requests\OfflineExam\OfflineExamStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(OfflineExamStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'offlineExam' => OfflineExam::create([
                    'exam_name' => $validated['exam_name'],
                    //'class_name' => $validated['class_name'],
                    'exam_start_time' => $validated['exam_start_time'],
                    'exam_end_time' => $validated['exam_end_time'],
                    'total_marks' => $validated['total_marks'],
                    // 'paper' => $validated['paper'],
                    // 'section' => $validated['section'],
                    // 'subject_code' => $validated['subject_code'],
                    // 'date_time' => $validated['date_time'],
                    // 'building_name' => $validated['building_name'],
                    // 'room_number' => $validated['room_number'],
                ]),
            ],
            'message' => 'Offline Exam Store Successful.',
        ]);
   }

}
