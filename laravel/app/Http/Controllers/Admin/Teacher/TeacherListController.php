<?php

namespace App\Http\Controllers\Admin\Teacher;

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
                'teachers' => User::where('role_id', 4)->where('school_id', 1)->get(
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

            'message' => 'Teacher list successful.',
        ]);
    }

 }
