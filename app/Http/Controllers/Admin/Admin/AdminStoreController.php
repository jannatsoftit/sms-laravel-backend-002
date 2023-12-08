<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Requests\Admin\AdminStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminStoreController extends Controller
{
  /**
   * Store admin.
   *
   * @param \App\Http\Requests\Admin\AdminStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(AdminStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // admin image save in storage file:
        $image->storeAs('public/AD_img', $imageName);

        //Storage::disk('public')->put($imageName, file_get_contents($image));
        //Storage::disk('public')->put($imageName, file_get_contents($image));
        //$image->move( 'AD_img', $imageName );

      return response()->json([
          'data' => [
              'admin' => User::create([
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
              ]
            ),
          ],
          'message' => 'Admin Store Successful.',
      ]);
    }
   }

}
