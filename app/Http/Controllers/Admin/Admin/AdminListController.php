<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminListController extends Controller
{
  /**
   * List admin.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AdminListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'admins' => User::where('role_id', 1)->where('school_id', 1)->get(
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

            'message' => 'Admin list successful.',
        ]);
    }

 }
