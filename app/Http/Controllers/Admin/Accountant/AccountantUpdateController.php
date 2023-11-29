<?php

namespace App\Http\Controllers\Admin\Accountant;

use App\Http\Requests\Accountant\AccountantUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AccountantUpdateController extends Controller
{
  /**
   * Update accountant.
   *
   * @param \App\Http\Requests\Accountant\AccountantUpdateRequest $request
   * @param \App\Models\User $accountant
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AccountantUpdateRequest $request, User $accountant): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){

            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();

            // accountant image save in storage file:
            $file->storeAs('public/AC_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'accountant' => $accountant->update([
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
                'message' => 'Accountant update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'accountant' => $accountant->update([
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
                'message' => 'Accountant update without image successful.',
            ]);
        }else{
            return 'Accountant image not found';
        }
    }
}
