<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Requests\Teacher\TeacherUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class TeacherUpdateController extends Controller
{
  /**
   * Update Teacher.
   *
   * @param \App\Http\Requests\Teacher\TeacherUpdateRequest $request
   * @param \App\Models\User $teacher
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(TeacherUpdateRequest $request, User $teacher): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // Teacher image save in storage file:
            $file->storeAs('public/T_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'teacher' => $teacher->update([
                        "first_name" => $validated['first_name'],
                        "last_name" => $validated['last_name'],
                        "email" => $validated['email'],
                        "phone_number" => $validated['phone_number'],
                        "date_of_birth" => $validated['date_of_birth'],
                        "address" => $validated['address'],
                        "blood_group" => $validated['blood_group'],
                        "designation" => $validated['designation'],
                        "department" => $validated['department'],
                        "password" => $validated['password'],
                        "image" => $imageName,
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Teacher update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'teacher' => $teacher->update([
                        "first_name" => $validated['first_name'],
                        "last_name" => $validated['last_name'],
                        "email" => $validated['email'],
                        "phone_number" => $validated['phone_number'],
                        "date_of_birth" => $validated['date_of_birth'],
                        "address" => $validated['address'],
                        "blood_group" => $validated['blood_group'],
                        "designation" => $validated['designation'],
                        "department" => $validated['department'],
                        "password" => $validated['password'],
                        "image" => $imageName,
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Teacher update without image successful.',
            ]);
        }else{
            return 'Teacher image not found';
        }
    }
}
