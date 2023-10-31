<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminDestroyController extends Controller
{
  /**
   * Delete Admin.
   *
   * @param \App\Models\User $admin
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $admin ): JsonResponse
    {
        $admin->delete();
        return response()->json([
            'data' => [
                'admin' => $admin,
            ],
            'message' => 'Admin Deleted Successfully.'
        ]);
    }
}
