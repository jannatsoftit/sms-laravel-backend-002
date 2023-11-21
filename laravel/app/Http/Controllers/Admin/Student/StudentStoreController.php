<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentStoreRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class StudentStoreController extends Controller
{
  /**
   * Store student.
   *
   * @param \App\Http\Requests\Student\StudentStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(StudentStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // student image save in storage file:
        $image->storeAs('public/S_img', $imageName);

      return response()->json([
          'data' => [
              'student' => User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'designation' => $request->designation,
                'department' => $request->department,
                'password' => $request->password,
                'user_information' => $request->user_information,
                'image' => $imageName,
                'gender' => $request->gender,
              ])
          ],
          'message' => 'Student Store Successful.',
      ]);
   }
}

}
