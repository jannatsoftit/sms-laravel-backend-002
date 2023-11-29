<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Requests\Admin\AdminUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminUpdateController extends Controller
{
  /**
   * Update admin.
   *
   * @param \App\Http\Requests\Admin\AdminUpdateRequest $request
   * @param \App\Models\User $admin
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AdminUpdateRequest $request, User $admin): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // admin image save in storage file:
            $file->storeAs('public/AD_img', $imageName);
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
