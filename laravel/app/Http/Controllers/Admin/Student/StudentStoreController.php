<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentStoreRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class StudentStoreController extends Controller
{
  /**
   * Store student.
   *
   * @param \App\Http\Requests\Student\StudentStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(StudentStoreRequest $request): JsonResponse
   {
      return response()->json([
          'data' => [
              'student' => User::create($request->validated()),
          ],
          'message' => 'Student Store Successful.',
      ]);
   }

}

// class StudentStoreController extends Controller
// {

//     //-- student data create

//     public function studentCreate()
//     {
//         return view( 'admin.student.create' );
//     }

//     //-- student store

//     public function studentStore( Request $request )
//     {

//     $data = $request->validate( [
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'email' => 'required|email',
//             'gender' => 'required',
//             'password' => 'required|min:6',
//             'address' => 'required',
//             'phone' => 'required',
//             'blood_group' => 'required',
//             'image' => 'required|mimes:jpg,jpeg,png,svg,gif|max:2048',
//         ] );

//         if ( !empty( $data[ 'image' ] ) ) {
//             $file = $data[ 'image' ];
//             $filename = time(). '.' . $file->getClientOriginalName();
//             $file->move( 'S_img', $filename );
//             $image = $filename;

//         } else {
//             $image = '';
//         }

//         $info = array(
//             'address' => $data[ 'address' ],
//             'phone' => $data[ 'phone' ],
//             'blood_group' => $data[ 'blood_group' ],
//         );

//         $data[ 'user_information' ] = json_encode( $info );

//         User::create( [
//             'first_name' => $data[ 'first_name' ],
//             'last_name' => $data[ 'last_name' ],
//             'email' => $data[ 'email' ],
//             'gender' => $data[ 'gender' ],
//             'password' => Hash::make( $data[ 'password' ] ),
//             'role_id' => '2',
//             'school_id' => Auth::user()->school_id,
//             'user_information' => $data[ 'user_information' ],
//             'image' => $image,
//         ] );

//         return redirect()->route( 'admin.student' )->with( 'success', 'Student Created Successfully!' );

//     }

// }

