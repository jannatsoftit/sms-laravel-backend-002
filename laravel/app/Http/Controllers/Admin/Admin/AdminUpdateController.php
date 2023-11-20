<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Requests\Admin\AdminUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
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

        $validated = $request->validated();

        if(!empty($validated['image'])){
            $file = $validated['image'];
            $imageName = time().'.'.$file->getClientOriginalExtension();
            // admin image save in storage file:
            $file->storeAs('public/AD_img', $imageName);
            $image = $imageName;

        }else{
           $image = '';
        }

        if(!empty($validated['image'])){

            return response()->json([
                'data' => [
                    'admin' => $admin->update([
                        "first_name" => $validated['first_name'],
                        "last_name" => $validated['last_name'],
                        "email" => $validated['email'],
                        "designation" => $validated['designation'],
                        "department" => $validated['department'],
                        "password" => $validated['password'],
                        "user_information" => $validated['user_information'],
                        "user_information" => $validated['user_information'],
                        "image" => $imageName,
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Admin update with image successful.',
            ]);

        }elseif(empty($validated['image'])){

            return response()->json([
                'data' => [
                    'admin' => $admin->update([
                        "first_name" => $validated['first_name'],
                        "last_name" => $validated['last_name'],
                        "email" => $validated['email'],
                        "designation" => $validated['designation'],
                        "department" => $validated['department'],
                        "password" => $validated['password'],
                        "user_information" => $validated['user_information'],
                        "user_information" => $validated['user_information'],
                        "gender" => $validated['gender'],
                    ]),
                ],
                'message' => 'Admin update successful.',
            ]);
        }else{
            return 'image not found';
        }

        // return response()->json([
        //     'data' => [
        //         'admin' => $admin->update([
        //             "first_name" => $validated['first_name'],
        //             "last_name" => $validated['last_name'],
        //             "email" => $validated['email'],
        //             "designation" => $validated['designation'],
        //             "department" => $validated['department'],
        //             "password" => $validated['password'],
        //             "user_information" => $validated['user_information'],
        //             "user_information" => $validated['user_information'],
        //             "image" => $imageName,
        //             "gender" => $validated['gender'],
        //         ]),
        //     ],
        //     'message' => 'Admin update successful.',
        // ]);



        }



    //     $admin->fill($request->post())->update();

    //     if($request->has('image')){

    //         if($admin->image){
    //             $exists = Storage::disk('public')->exists(`AD_img/{$admin->image}`);
    //             if($exists){
    //                 Storage::disk('public')->delete(`AD_img/{$admin->image}`);
    //             }
    //         }

    //         $image = $request->file('image');

    //         $imageName = time().'.'.$image->getClientOriginalExtension();

    //         $image->storeAs('public/AD_img', $imageName);

    //         $admin->image = $imageName;

    //         $admin->save();

    //     }

    // $admin->update($request->validated());

    //     return response()->json([
    //         'data' => [

    //             $validated = $request->validated(),
    //             'admin' => $admin->update([
    //                 "first_name" => $validated['first_name'],
    //                 "last_name" => $validated['last_name'],
    //                 "email" => $validated['email'],
    //                 "designation" => $validated['designation'],
    //                 "department" => $validated['department'],
    //                 "password" => $validated['password'],
    //                 "user_information" => $validated['user_information'],
    //                 "image" => $imageName,
    //                 "gender" => $validated['gender'],
    //             ]),
    //         ],
    //         'message' => 'Admin update successful.',
    //     ]);

    }
