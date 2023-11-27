<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Requests\Librarian\LibrarianUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class LibrarianUpdateController extends Controller
{
  /**
   * Update librarian.
   *
   * @param \App\Http\Requests\Librarian\LibrarianUpdateRequest $request
   * @param \App\Models\User $librarian
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(LibrarianUpdateRequest $request, User $librarian): JsonResponse
    {

        $validated = $request->validated();

        if(!empty($validated['image'])){

            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();

            // Librarian image save in storage file:
            $file->storeAs('public/LA_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'librarian' => $librarian->update([
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
                'message' => 'Librarian update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'librarian' => $librarian->update([
                        "first_name" => $validated['first_name'],
                        "last_name" => $validated['last_name'],
                        "email" => $validated['email'],
                        "designation" => $validated['designation'],
                        "department" => $validated['department'],
                        "password" => $validated['password'],
                        "user_information" => $validated['user_information'],
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Librarian update without image successful.',
            ]);
        }else{
            return 'Librarian image not found';
        }
    }
}
