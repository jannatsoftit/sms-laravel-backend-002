<?php

namespace App\Http\Controllers\Student\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TeacherListController extends Controller
{
  /**
   * List Teacher.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(TeacherListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'teachers' => User::where('role_id', 3)->where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'first_name',
                        'last_name',
                        'email',
                        'phone_number',
                        'date_of_birth',
                        'address',
                        'blood_group',
                        'designation',
                        'department',
                        'password',
                        'password_confirmation',
                        'image',
                        'gender',
                    ],
                ),
            ],

            'message' => 'Teacher list successful.',
        ]);
    }

 }
