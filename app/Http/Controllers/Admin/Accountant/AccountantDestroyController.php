<?php

namespace App\Http\Controllers\Admin\Accountant;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountantDestroyController extends Controller
{
  /**
   * Delete Accountant.
   *
   * @param \App\Models\User $accountant
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $accountant ): JsonResponse
    {
        $accountant->delete();
        
        return response()->json([
            'data' => [
                'accountant' => $accountant,
            ],
            'message' => 'Accountant Deleted Successfully.'
        ]);
    }
}
