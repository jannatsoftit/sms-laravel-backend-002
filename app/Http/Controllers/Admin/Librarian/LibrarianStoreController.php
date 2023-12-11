<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Requests\Librarian\LibrarianStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LibrarianStoreController extends Controller
{
  /**
   * Store librarian.
   *
   * @param \App\Http\Requests\Librarian\LibrarianStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(LibrarianStoreRequest $request): JsonResponse
   {

    if($request->has('image')){

        $image = $request->file('image');

        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Librarian image save in storage file:
        $image->storeAs('public/LA_img', $imageName);

        return response()->json([
            'data' => [
                'librarian' => User::create([
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
                    'role_id' => '6',
                    'school_id' => '1',
                ]
                ),
            ],
            'message' => 'Librarian Store Successful.',
        ]);
    }
   }

}
