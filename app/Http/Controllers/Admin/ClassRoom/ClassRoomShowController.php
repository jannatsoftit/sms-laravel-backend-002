<?php

namespace App\Http\Controllers\Admin\ClassRoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomShowController extends Controller
{
  /**
   * Show classRoom.
   *
   * @param \App\Models\ClassRoom $classRoom
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ClassRoom $classRoom ): JsonResponse
    {
        return response()->json([
            'data' => [
                'classRoom' => $classRoom,
            ],
            'message' => 'Class Room Show Successful.',
        ]);
    }
}
