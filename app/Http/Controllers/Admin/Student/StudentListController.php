<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StudentListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentListController extends Controller
{
  /**
   * List student.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */


    public function __invoke(StudentListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'students' => User::where( 'role_id', 2 )->where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'first_name',
                        'last_name',
                        'email',
                        'designation',
                        'department',
                        'password',
                        'user_information',
                        'image',
                        'gender',
                    ],
                ),
            ],

            'message' => 'student list successful.',
        ]);
    }

 }
