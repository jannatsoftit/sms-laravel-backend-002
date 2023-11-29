<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Requests\Parent\ParentUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ParentUpdateController extends Controller
{
  /**
   * Update Parent.
   *
   * @param \App\Http\Requests\Parent\ParentUpdateRequest $request
   * @param \App\Models\User $parent
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ParentUpdateRequest $request, User $parent): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){

            $file = $validated['image'];

            $imageName = time().'.'.$file->getClientOriginalExtension();

            // parent image save in storage file:
            $file->storeAs('public/P_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'parent' => $parent->update([
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
                'message' => 'Parent update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'parent' => $parent->update([
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
                'message' => 'Parent update without image successful.',
            ]);
        }else{
            return 'parent image not found';
        }
    }
}
