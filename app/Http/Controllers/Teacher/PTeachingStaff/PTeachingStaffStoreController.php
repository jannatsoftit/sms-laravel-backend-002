<?php

namespace App\Http\Controllers\Teacher\PTeachingStaff;

use App\Http\Requests\PTeachingStaff\PTeachingStaffStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\PTeachingStaff;
use Illuminate\Support\Facades\Hash;

class PTeachingStaffStoreController extends Controller
{
  /**
   * Store pteachingStaff.
   *
   * @param \App\Http\Requests\PTeachingStaff\PTeachingStaffStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(PTeachingStaffStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // PTeachingStaff image save in storage file:
        $image->storeAs('public/TS_img', $imageName);

      return response()->json([
          'data' => [
              'pteachingStaff' => PTeachingStaff::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $imageName,
              ]
            ),
          ],
          'message' => 'PTeaching Staff Store Successful.',
      ]);
    }
   }

}
