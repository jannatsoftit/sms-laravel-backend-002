<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Requests\Admin\AdminUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
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

        //$imageName = '';

        if($request->has('image')){

            $image = $request->file('image');

            $newImage = time().'.'.$image->getClientOriginalExtension();

            $image->move( 'AD_img', $newImage );

        }else {

        $imageName = $admin->image;
    }

    $admin->update($request->validated());

        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'admin' => $admin->update([
                    "first_name" => $validated['first_name'],
                    "last_name" => $validated['last_name'],
                    "email" => $validated['email'],
                    "designation" => $validated['designation'],
                    "department" => $validated['department'],
                    "password" => $validated['password'],
                    "user_information" => $validated['user_information'],
                    "image" => $imageName,
                    "gender" => $validated['gender'],
                ]),
            ],
            'message' => 'Admin update successful.',
        ]);

    }
}
