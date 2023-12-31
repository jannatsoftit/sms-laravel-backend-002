<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Requests\Parent\ParentStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ParentStoreController extends Controller
{
  /**
   * Store Parent.
   *
   * @param \App\Http\Requests\Parent\ParentStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(ParentStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Parent image save in storage file:
        $image->storeAs('public/AD_img', $imageName);

        return response()->json([
            'data' => [
                'parent' => User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'date_of_birth' => $request->date_of_birth,
                    'address' => $request->address,
                    'blood_group' => $request->blood_group,
                    'designation' => $request->designation,
                    'department' => $request->department,
                    'password'=>Hash::make($request->password),
                    'password_confirmation'=>Hash::make($request->password_confirmation),
                    'image' => $imageName,
                    'gender' => $request->gender,
                    'role_id' => '4',
                    'school_id' => '1',
                ]
                ),
            ],
            'message' => 'Parent Store Successful.',
        ]);
    }
   }

}
