<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Requests\Librarian\LibrarianStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

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
                    'designation' => $request->designation,
                    'department' => $request->department,
                    'password' => $request->password,
                    'user_information' => $request->user_information,
                    'image' => $imageName,
                    'gender' => $request->gender,
                ]
                ),
            ],
            'message' => 'Librarian Store Successful.',
        ]);
    }
   }

}