<?php

namespace App\Http\Controllers\Teacher\NonTeachingStaff;

use App\Http\Requests\NonTeachingStaff\NonTeachingStaffStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\NonTeachingStaff;
use Illuminate\Support\Facades\Hash;

class NonTeachingStaffStoreController extends Controller
{
  /**
   * Store nonTeachingStaff.
   *
   * @param \App\Http\Requests\NonTeachingStaff\NonTeachingStaffStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(NonTeachingStaffStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // NonTeachingStaff image save in storage file:
        $image->storeAs('public/NTS_img', $imageName);

      return response()->json([
          'data' => [
              'nonTeachingStaff' => NonTeachingStaff::create([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $imageName,
                'school_id' => '1',
              ]
            ),
          ],
          'message' => 'Non Teaching Staff Store Successful.',
      ]);
    }
   }

}
