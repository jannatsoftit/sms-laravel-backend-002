<?php

namespace App\Http\Controllers\Profile\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileShowController extends Controller
{
  /**
   * Show User.
   *
   * @param \App\Models\User $user
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $user ): JsonResponse
    {
        return response()->json([
            'data' => [
                'user' => $user,
            ],
            'message' => 'User Information Show Successfully.',
        ]);
    }
}
