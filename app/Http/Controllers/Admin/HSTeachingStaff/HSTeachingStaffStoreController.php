<?php

namespace App\Http\Controllers\Admin\HSTeachingStaff;

use App\Http\Requests\HSTeachingStaff\HSTeachingStaffStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\HSTeachingStaff;
use Illuminate\Support\Facades\Hash;

class HSTeachingStaffStoreController extends Controller
{
  /**
   * Store hsteachingStaff.
   *
   * @param \App\Http\Requests\HSTeachingStaff\HSTeachingStaffStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(HSTeachingStaffStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // HSTeachingStaff image save in storage file:
        $image->storeAs('public/TS_img', $imageName);

      return response()->json([
          'data' => [
              'hsteachingStaff' => HSTeachingStaff::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $imageName,
              ]
            ),
          ],
          'message' => 'HSTeaching Staff Store Successful.',
      ]);
    }
   }

}
