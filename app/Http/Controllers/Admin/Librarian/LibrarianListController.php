<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Controllers\Controller;
use App\Http\Requests\Librarian\LibrarianListRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LibrarianListController extends Controller
{
  /**
   * List Librarian.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(LibrarianListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'librarians' => User::where('role_id', 6)->where('school_id', 1)->get(
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

            'message' => 'Librarian list successful.',
        ]);
    }

 }
