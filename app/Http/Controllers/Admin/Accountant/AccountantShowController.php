<?php

namespace App\Http\Controllers\Admin\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class AccountantShowController extends Controller
{
  /**
   * Show Accountant.
   *
   * @param \App\Models\User $accountant
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $accountant ): JsonResponse
    {
        return response()->json([
            'data' => [
                'accountant' => $accountant,
            ],
            'message' => 'Accountant Show Successful.',
        ]);
    }
}
