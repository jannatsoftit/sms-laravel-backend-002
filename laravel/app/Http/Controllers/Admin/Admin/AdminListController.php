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

            'message' => 'Admin list successful.',
        ]);
    }

 }
