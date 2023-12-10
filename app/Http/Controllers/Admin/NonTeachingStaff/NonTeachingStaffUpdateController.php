<?php

namespace App\Http\Controllers\Admin\NonTeachingStaff;

use App\Http\Requests\NonTeachingStaff\NonTeachingStaffUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\NonTeachingStaff;

class NonTeachingStaffUpdateController extends Controller
{
  /**
   * Update nonTeachingStaff.
   *
   * @param \App\Http\Requests\NonTeachingStaff\NonTeachingStaffUpdateRequest $request
   * @param \App\Models\NonTeachingStaff $nonTeachingStaff
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(NonTeachingStaffUpdateRequest $request, NonTeachingStaff $nonTeachingStaff): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // NonTeaching Staff image save in storage file:
            $file->storeAs('public/NTS_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'nonTeachingStaff' => $nonTeachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'Non Teaching Staff update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'nonTeachingStaff' => $nonTeachingStaff->update([
                        "name" => $validated['name'],
                        "designation" => $validated['designation'],
                        "image" => $imageName,
                    ]),
                ],
                'message' => 'Non Teaching Staff update without image successful.',
            ]);
        }else{
            return 'Non Teaching Staff image not found';
        }
    }
}
