<?php

namespace App\Http\Controllers\Admin\OfflineExam;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\OfflineExam;

class OfflineExamShowController extends Controller
{
  /**
   * Show offlineExam.
   *
   * @param \App\Models\OfflineExam $offlineExam
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( OfflineExam $offlineExam ): JsonResponse
    {
        return response()->json([
            'data' => [
                'offlineExam' => $offlineExam,
            ],
            'message' => 'Offline Exam Show Successful.',
        ]);
    }
}
