<?php

namespace App\Http\Controllers\Admin\ClassRoom;

use App\Http\Requests\ClassRoom\ClassRoomStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\ClassRoom;

class ClassRoomStoreController extends Controller
{
  /**
   * Store classRoom.
   *
   * @param \App\Http\Requests\ClassRoom\ClassRoomStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(ClassRoomStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'classRoom' => ClassRoom::create([
                    'class_room_name' => $validated['class_room_name'],
                    'room_number' => $validated['room_number'],
                    'building_name' => $validated['building_name'],
                    'area' => $validated['area'],
                    'total_room' => $validated['total_room'],
                ]),
            ],
            'message' => 'Class Room Store Successful.',
        ]);
   }

}
