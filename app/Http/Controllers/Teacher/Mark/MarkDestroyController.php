<?php

namespace App\Http\Controllers\Teacher\Mark;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class MarkDestroyController extends Controller
{
  /**
   * Delete mark.
   *
   * @param \App\Models\Mark $mark
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Mark $mark ): JsonResponse
    {
        $mark->delete();

        return response()->json([
            'data' => [
                'mark' => $mark,
            ],
            'message' => 'Mark Deleted Successfully.'
        ]);
    }
}
