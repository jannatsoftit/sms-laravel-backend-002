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

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|max:50|', //unique:users,email
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5',
            'designation' => 'required|max:50',
            'department' => 'required|max:50',
            'user_information' => 'required|max:50',
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
            $user = User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'password_confirmation'=>Hash::make($request->password_confirmation),
                'designation'=>$request->designation,
                'department'=>$request->department,
                'user_information'=>$request->user_information,
                'image'=>$request->image,
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
