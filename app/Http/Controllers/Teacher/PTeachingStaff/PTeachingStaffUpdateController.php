<?php

namespace App\Http\Controllers\Teacher\PTeachingStaff;

use App\Http\Requests\PTeachingStaff\PTeachingStaffUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\PTeachingStaff;

class PTeachingStaffUpdateController extends Controller
{
  /**
   * Update pteachingStaff.
   *
   * @param \App\Http\Requests\PTeachingStaff\PTeachingStaffUpdateRequest $request
   * @param \App\Models\PTeachingStaff $pteachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(PTeachingStaffUpdateRequest $request, PTeachingStaff $pteachingStaff): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // PTeaching Staff image save in storage file:
            $file->storeAs('public/TS_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'pteachingStaff' => $pteachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'PTeaching Staff update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'pteachingStaff' => $pteachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'PTeaching Staff update without image successful.',
            ]);
        }else{
            return 'PTeaching Staff image not found';
        }
    }
}
