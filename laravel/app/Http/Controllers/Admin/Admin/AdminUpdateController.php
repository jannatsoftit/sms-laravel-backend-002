<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUpdateController extends Controller
{

    //-- Admin single data edit

    public function adminEdit( string $id, User $admin )
    {
        $admin = User::find( $id );
        return view( 'admin.admin.edit', compact( 'admin' ) );
    }

    //-- Admin data update

    public function adminUpdate( Request $request, string $id, User $admin )
    {

        $update_data = $request->all();

        if ( !empty( $update_data[ 'image' ] ) ) {
            $file = $update_data[ 'image' ];
            $filename = time(). '.' .$file->getClientOriginalExtension();
            $file->move( 'AD_img', $filename );
            $image = $filename;
        } else {
            $image = '';
        }

        $info = array(
            'address' => $update_data[ 'address' ],
            'phone' => $update_data[ 'phone' ],
            'blood_group' => $update_data[ 'blood_group' ],
        );

        $update_data[ 'user_information' ] = json_encode( $info );

        if ( !empty( $update_data[ 'image' ] ) ) {
            User::where( 'id', $id )->update( [
                'first_name' => $update_data[ 'first_name' ],
                'last_name' => $update_data[ 'last_name' ],
                'email' => $update_data[ 'email' ],
                'gender' => $update_data[ 'gender' ],
                'user_information' => $update_data[ 'user_information' ],
                'image' => $image,
            ] );

        } elseif ( empty( $update_data[ 'image' ] ) ) {
            User::where( 'id', $id )->update( [
                'first_name' => $update_data[ 'first_name' ],
                'last_name' => $update_data[ 'last_name' ],
                'email' => $update_data[ 'email' ],
                'gender' => $update_data[ 'gender' ],
                'user_information' => $update_data[ 'user_information' ],
            ] );

        } else {
            return 'image need';
        }

        return redirect()->route( 'admin.admin' )->with( 'success', 'Admin Info Updated Successfully!!' );

    }

}
