<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Requests\Teacher\TeacherStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class TeacherStoreController extends Controller
{
  /**
   * Store Teacher.
   *
   * @param \App\Http\Requests\Teacher\TeacherStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(TeacherStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Teacher image save in storage file:
        $image->storeAs('public/T_img', $imageName);

      return response()->json([
          'data' => [
              'teacher' => User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'date_of_birth' => $request->date_of_birth,
                'address' => $request->address,
                'blood_group' => $request->blood_group,
                'designation' => $request->designation,
                'department' => $request->department,
                'password' => $request->password,
                'image' => $imageName,
                'gender' => $request->gender,
              ]
            ),
          ],
          'message' => 'Teacher Store Successful.',
      ]);
    }
   }

}
