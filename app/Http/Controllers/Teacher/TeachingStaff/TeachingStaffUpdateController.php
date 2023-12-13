<?php

namespace App\Http\Controllers\Teacher\TeachingStaff;

use App\Http\Requests\TeachingStaff\TeachingStaffUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\TeachingStaff;

class TeachingStaffUpdateController extends Controller
{
  /**
   * Update teachingStaff.
   *
   * @param \App\Http\Requests\teachingStaff\TeachingStaffUpdateRequest $request
   * @param \App\Models\TeachingStaff $teachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(TeachingStaffUpdateRequest $request, TeachingStaff $teachingStaff): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // Teaching Staff image save in storage file:
            $file->storeAs('public/TS_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'teachingStaff' => $teachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'Teaching Staff update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'teachingStaff' => $teachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'Teaching Staff update without image successful.',
            ]);
        }else{
            return 'Teaching Staff image not found';
        }
    }
}
