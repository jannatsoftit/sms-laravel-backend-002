<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(Request $request){



            // Validation
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'email' => 'required|email|max:50|', //unique:users,email
                'phone_number' => 'required|min:11',
                'date_of_birth' => 'required',
                'address' => 'required',
                'blood_group' => 'required',
                'password' => 'required|min:5',
                'password_confirmation' => 'required|min:5',
                'designation' => 'required|max:50',
                'department' => 'required|max:50',
                'image' => 'required|max:50',
                'gender' => 'required|max:50',
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'validation_errors'=> $validator->messages(),
                ]);
            }else
            {

                if($request->has('image')){
                    
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    // admin image save in storage file:
                    $image->storeAs('public/R_img', $imageName);

                    $user = User::create([
                        'first_name'=>$request->first_name,
                        'last_name'=>$request->last_name,
                        'email'=>$request->email,
                        'phone_number'=>$request->phone_number,
                        'date_of_birth'=>$request->date_of_birth,
                        'address'=>$request->address,
                        'blood_group'=>$request->blood_group,
                        'password'=>Hash::make($request->password),
                        'password_confirmation'=>Hash::make($request->password_confirmation),
                        'designation'=>$request->designation,
                        'department'=>$request->department,
                        'image'=>$imageName,
                        'gender'=>$request->gender,
                    ]);

                    $token = $user->createToken($user->email.'_Token')->plainTextToken;

                    return response()->json([
                        'status'=>200,
                        'username'=>$user->name,
                        'token'=>$token,
                        'message'=>'Registered Successfully',
                    ]);
                }


            }






    }

}
