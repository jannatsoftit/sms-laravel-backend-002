<?php

namespace App\Http\Controllers\Student\Mark;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Mark;

class MarkShowController extends Controller
{
  /**
   * Show mark.
   *
   * @param \App\Models\Mark $mark
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Mark $mark ): JsonResponse
    {
        return response()->json([
            'data' => [
                'mark' => $mark,
            ],
            'message' => 'Mark Show Successful.',
        ]);
    }
}
