<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class StudentUpdateController extends Controller
{
  /**
   * Update student.
   *
   * @param \App\Http\Requests\Student\StudentUpdateRequest $request
   * @param \App\Models\User $student
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(StudentUpdateRequest $request, User $student): JsonResponse
    {
        $validated = $request->validated();

        if(!empty($validated['image'])){

            $file = $validated['image'];

            // student image name
            $imageName = time().'.'.$file->getClientOriginalExtension();

            // student image save in storage file:
            $file->storeAs('public/AD_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'student' => $student->update([
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
                        "password_confirmation" => $validated['password_confirmation'],
                        "image" => $imageName,
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Student update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'student' => $student->update([
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
                        "password_confirmation" => $validated['password_confirmation'],
                        "image" => $imageName,
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Student update without image successful.',
            ]);
        }else{
            return 'image not found';
        }

    }

}
