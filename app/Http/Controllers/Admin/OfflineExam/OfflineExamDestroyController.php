<?php

namespace App\Http\Controllers\Admin\OfflineExam;

use App\Http\Controllers\Controller;
use App\Models\OfflineExam;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class OfflineExamDestroyController extends Controller
{
  /**
   * Delete offlineExam.
   *
   * @param \App\Models\OfflineExam $offlineExam
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( OfflineExam $offlineExam ): JsonResponse
    {
        $offlineExam->delete();

        return response()->json([
            'data' => [
                'offlineExam' => $offlineExam,
            ],
            'message' => 'Offline Exam Deleted Successfully.'
        ]);
    }
}
