<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class AdminShowController extends Controller
{
  /**
   * Show Admin.
   *
   * @param \App\Models\User $admin
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $admin ): JsonResponse
    {
        return response()->json([
            'data' => [
                'admin' => $admin,
            ],
            'message' => 'Admin Show Successful.',
        ]);
    }
}
