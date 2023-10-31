<?php

namespace App\Http\Controllers\Admin\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminStoreController extends Controller
{

    //-- Admin create

    public function adminCreate()
    {
        return view( 'admin.admin.create' );
    }

    //-- Admin data Store

    public function adminStore( Request $request, User $admin )
    {
        $data = $request->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'blood_group' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ] );


        if ( !empty( $data[ 'image' ] ) ) {
            $file = $data[ 'image' ];
            $filename = time(). '.' . $file->getClientOriginalName();
            $file->move( 'AD_img', $filename );
            $image = $filename;

        } else {
            $image = '';
        }

        $info = array(
            'address' => $data[ 'address' ],
            'phone' => $data[ 'phone' ],
            'blood_group' => $data[ 'blood_group' ],
        );

        $data[ 'user_information' ] = json_encode( $info );

        User::create( [
            'first_name' => $data[ 'first_name' ],
            'last_name' => $data[ 'last_name' ],
            'email' => $data[ 'email' ],
            'gender' => $data[ 'gender' ],
            'password' => Hash::make( $data[ 'password' ] ),
            'role_id' => '1',
            'school_id' => Auth::user()->school_id,
            'user_information' => $data[ 'user_information' ],
            'image' => $image,
        ] );

        return redirect()->route( 'admin.admin' )->with( 'success', 'Admin created Successfully!!' );
    }


}
