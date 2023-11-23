<?php

namespace App\Http\Controllers\Admin\Accountant;

use App\Http\Requests\Accountant\AccountantStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AccountantStoreController extends Controller
{
  /**
   * Store accountant.
   *
   * @param \App\Http\Requests\Accountant\AccountantStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(AccountantStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Accountant image save in storage file:
        $image->storeAs('public/AC_img', $imageName);

      return response()->json([
          'data' => [
              'accountant' => User::create([
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
          'message' => 'Accountant Store Successful.',
      ]);
    }
   }

}
