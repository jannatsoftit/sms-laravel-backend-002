<?php

namespace App\Http\Controllers\API;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{


    //--------- Register function ---------//

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
                'gender' => 'required|max:50',
            ]);

            if($validator->fails())
            {
                return response()->json([
                    'validation_errors'=> $validator->messages(),
                ]);
            }else
            {
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
                    'gender'=>$request->gender,
                    ]);

                    $token = $user->createToken($user->email.'_Token')->plainTextToken;

                    return response()->json([
                        'status'=>200,
                        'username'=>$user->first_name,
                        'token'=>$token,
                        'message'=>'Registered Successfully',
                    ]);
                

            }

    }

    //--------- Login function ---------//

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:50', //unique:users,email
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'validation_errors'=> $validator->messages(),
            ]);

        }else
        {

            $user = User::where('email', $request->email)->first();

            if(!$user || (!Hash::check($request->password, $user->password) && !Hash::check($request->password_confirmation, $user->password_confirmation)))
            {
                return response()->json([
                    'status'=>401,
                    'message'=>'Invalid Credentials',
                ]);

            }else
            {
                $token = $user->createToken($user->email.'_Token')->plainTextToken;

                return response()->json([
                    'status'=>200,
                    'token'=>$token,
                    'username'=>$user->first_name,
                    'last_name'=>$user->last_name,
                    'email'=>$user->email,
                    'address'=>$user->address,
                    'phone_number'=>$user->phone_number,
                    'gender'=>$user->gender,
                    'department'=>$user->department,
                    'blood_group'=>$user->blood_group,
                    'image'=>$user->image,
                    'role_id'=>$user->role_id,
                    'school_id'=>$user->school_id,
                    'message'=>'Logged In Successfully',
                ]);

            }

        }

    }


    //--------- Logout function ---------//

    // public function logout()
    // {
    //     Auth::user()->tokens()->delete();
    //     return response()->json([
    //         'status' => 200,
    //         'message' => 'Logged Out Successfully',
    //     ]);
    // }



}
