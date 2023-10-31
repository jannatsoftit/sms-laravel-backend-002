<?php

namespace App\Http\Controllers\Admin\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
 {

   public function adminDashboard()
   {
       if ( Auth::user()->role_id != '' ) {
           return view( 'admin.dashboard' );
       } else {
           redirect()->route( 'login' )->with( 'error', 'You are not logged in.' );
       }
   }

   public function adminTopbar()
   {
       if ( Auth::user()->role_id != '' ) {
           return view( 'admin.topbar' );
       } else {
           return 'error';
       }
   }

   public function adminProfile()
   {
       if ( User::where( 'school_id', Auth::user()->school_id )->where( 'role_id', 1 ) ) {
           return view( 'admin.profile' );
       } else {
           return 'you are not allowed';
       }
   }

   public function adminProfileUpdate( Request $request, string $id, User $profile )
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

       return redirect()->route( 'admin.profile' )->with( 'success', 'Admin Profile Updated Successfully!!' );
   }

 }
