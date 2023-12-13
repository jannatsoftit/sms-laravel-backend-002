<?php

namespace App\Http\Controllers\Teacher\TeachingStaff;

use App\Http\Requests\TeachingStaff\TeachingStaffStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\TeachingStaff;
use Illuminate\Support\Facades\Hash;

class TeachingStaffStoreController extends Controller
{
  /**
   * Store teachingStaff.
   *
   * @param \App\Http\Requests\TeachingStaff\TeachingStaffStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(TeachingStaffStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // TeachingStaff image save in storage file:
        $image->storeAs('public/TS_img', $imageName);

      return response()->json([
          'data' => [
              'teachingStaff' => TeachingStaff::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $imageName,
              ]
            ),
          ],
          'message' => 'Teaching Staff Store Successful.',
      ]);
    }
   }

}
