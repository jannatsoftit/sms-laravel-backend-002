<?php

namespace App\Http\Controllers\Admin\HSTeachingStaff;

use App\Http\Requests\HSTeachingStaff\HSTeachingStaffUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\HSTeachingStaff;

class HSTeachingStaffUpdateController extends Controller
{
  /**
   * Update hsteachingStaff.
   *
   * @param \App\Http\Requests\HSTeachingStaff\HSTeachingStaffUpdateRequest $request
   * @param \App\Models\HSTeachingStaff $hsteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(HSTeachingStaffUpdateRequest $request, HSTeachingStaff $hsteachingStaff): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // HSTeaching Staff image save in storage file:
            $file->storeAs('public/TS_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'hsteachingStaff' => $hsteachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'HSTeaching Staff update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'hsteachingStaff' => $hsteachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'HSTeaching Staff update without image successful.',
            ]);
        }else{
            return 'HSTeaching Staff image not found';
        }
    }
}
