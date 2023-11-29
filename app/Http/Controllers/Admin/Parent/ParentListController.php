<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Parent\ParentListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ParentListController extends Controller
{
  /**
   * List parent.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(ParentListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'parents' => User::where('role_id', 3)->where('school_id', 1)->get(
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

            'message' => 'Parent list successful.',
        ]);
    }

 }
