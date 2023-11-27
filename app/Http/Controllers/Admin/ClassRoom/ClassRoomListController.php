<?php

namespace App\Http\Controllers\Admin\ClassRoom;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoom\ClassRoomListRequest;
use App\Models\ClassRoom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClassRoomListController extends Controller
{
  /**
   * List classRoom.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ClassRoomListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'classRooms' => ClassRoom::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'class_room_name',
                        'room_number',
                        'building_name',
                        'area',
                        'total_room',
                    ],
                ),
            ],

            'message' => 'Class Room list successful.',
        ]);
    }

 }
