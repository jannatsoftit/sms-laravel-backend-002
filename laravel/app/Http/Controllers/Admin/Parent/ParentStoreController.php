<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Requests\Parent\ParentStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

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
        $image->storeAs('public/P_img', $imageName);

        return response()->json([
            'data' => [
                'parent' => User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'designation' => $request->designation,
                    'department' => $request->department,
                    'password' => $request->password,
                    'user_information' => $request->user_information,
                    'image' => $imageName,
                    'gender' => $request->gender,
                ]
                ),
            ],
            'message' => 'Parent Store Successful.',
        ]);
    }
   }

}