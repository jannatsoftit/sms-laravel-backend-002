<?php

namespace App\Http\Controllers\Admin\ClassRoom;

use App\Http\Requests\ClassRoom\ClassRoomUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ClassRoom;

class ClassRoomUpdateController extends Controller
{
  /**
   * Update classRoom.
   *
   * @param \App\Http\Requests\ClassRoom\ClassRoomUpdateRequest $request
   * @param \App\Models\ClassRoom $classRoom
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ClassRoomUpdateRequest $request, ClassRoom $classRoom): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'classRoom' => $classRoom->update([
                    'class_room_name' => $validated['class_room_name'],
                    'room_number' => $validated['room_number'],
                    'building_name' => $validated['building_name'],
                    'area' => $validated['area'],
                    'total_room' => $validated['total_room'],
                ]),
            ],
            'message' => 'Class Room updated successfully.',
        ]);

    }
}
