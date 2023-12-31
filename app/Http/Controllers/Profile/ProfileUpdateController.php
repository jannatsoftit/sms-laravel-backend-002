<?php

namespace App\Http\Controllers\Profile\Profile;

use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileUpdateController extends Controller
{
  /**
   * Update User.
   *
   * @param \App\Http\Requests\Profile\ProfileUpdateRequest $request
   * @param \App\Models\User $user
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ProfileUpdateRequest $request, User $user): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // user image save in storage file:
            $file->storeAs('public/U_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'admin' => $admin->update([
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
                'message' => 'Admin update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'admin' => $admin->update([
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
                'message' => 'Admin update without image successful.',
            ]);
        }else{
            return 'image not found';
        }
    }
}
