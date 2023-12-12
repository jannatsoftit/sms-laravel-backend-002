<?php

namespace App\Http\Controllers\Student\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class ParentShowController extends Controller
{
  /**
   * Show Parent.
   *
   * @param \App\Models\User $parent
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $parent ): JsonResponse
    {
        return response()->json([
            'data' => [
                'parent' => $parent,
            ],
            'message' => 'Parent Show Successful.',
        ]);
    }
}
