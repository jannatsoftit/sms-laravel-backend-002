<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentUpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class StudentUpdateController extends Controller
{
  /**
   * Update student.
   *
   * @param \App\Http\Requests\Student\StudentUpdateRequest $request
   * @param \App\Models\User $student
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(StudentUpdateRequest $request, User $student): JsonResponse
    {
        $student->update($request->validated());

        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'student' => $student->update([
                    "first_name" => $validated['first_name'],
                    "last_name" => $validated['last_name'],
                    "email" => $validated['email'],
                    "designation" => $validated['designation'],
                    "department" => $validated['department'],
                    "password" => $validated['password'],
                    "user_information" => $validated['user_information'],
                    "image" => $validated['image'],
                    "gender" => $validated['gender'],
                ]),
            ],
            'message' => 'Student update successful.',
        ]);
    }




















    //-- student data for edit

    // public function studentEdit( string $id )
    // {
    //     $student = User::find( $id );
    //     return view( 'admin.student.edit', compact( 'student' ) );
    // }

    // //-- Update student info

    // public function studentUpdate( Request $request, string $id, User $student )
    // {
    //     $update_data = $request->all();

    //     if ( !empty( $update_data[ 'image' ] ) ) {
    //         $file = $update_data[ 'image' ];
    //         $filename = time(). '.' .$file->getClientOriginalExtension();
    //         $file->move( 'S_img', $filename );
    //         $image = $filename;
    //     } else {
    //         $image = '';
    //     }

    //     $info = array(
    //         'address' => $update_data[ 'address' ],
    //         'phone' => $update_data[ 'phone' ],
    //         'blood_group' => $update_data[ 'blood_group' ],
    //     );

    //     $update_data[ 'user_information' ] = json_encode( $info );

    //     if ( !empty( $update_data[ 'image' ] ) ) {
    //         User::where( 'id', $id )->update( [
    //             'first_name' => $update_data[ 'first_name' ],
    //             'last_name' => $update_data[ 'last_name' ],
    //             'email' => $update_data[ 'email' ],
    //             'gender' => $update_data[ 'gender' ],
    //             'user_information' => $update_data[ 'user_information' ],
    //             'image' => $image,
    //         ] );

    //     } elseif ( empty( $update_data[ 'image' ] ) ) {
    //         User::where( 'id', $id )->update( [
    //             'first_name' => $update_data[ 'first_name' ],
    //             'last_name' => $update_data[ 'last_name' ],
    //             'email' => $update_data[ 'email' ],
    //             'gender' => $update_data[ 'gender' ],
    //             'user_information' => $update_data[ 'user_information' ],
    //         ] );

    //     } else {
    //         return 'image need';
    //     }

    //     return redirect()->route( 'admin.student' )->with( 'success', 'Student Info Updated Successfully!!' );

    // }

}
