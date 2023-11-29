<?php

namespace App\Http\Controllers\Admin\Accountant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accountant\AccountantListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountantListController extends Controller
{
  /**
   * List accountant.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AccountantListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'accountants' => User::where('role_id', 5)->where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'first_name',
                        'last_name',
                        'email',
                        'designation',
                        'department',
                        'password',
                        'password_confirmation',
                        'user_information',
                        'image',
                        'gender',
                    ],
                ),
            ],

            'message' => 'Accountant list successful.',
        ]);
    }

 }
