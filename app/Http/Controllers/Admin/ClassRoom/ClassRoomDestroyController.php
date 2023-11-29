<?php

namespace App\Http\Controllers\Admin\ClassRoom;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class ClassRoomDestroyController extends Controller
{
  /**
   * Delete classRoom.
   *
   * @param \App\Models\ClassRoom $classRoom
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( ClassRoom $classRoom ): JsonResponse
    {
        $classRoom->delete();

        return response()->json([
            'data' => [
                'classRoom' => $classRoom,
            ],
            'message' => 'Class Room Deleted Successfully.'
        ]);
    }
}
