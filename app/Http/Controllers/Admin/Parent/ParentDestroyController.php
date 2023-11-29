<?php

namespace App\Http\Controllers\Admin\Parent;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ParentDestroyController extends Controller
{
  /**
   * Delete Parent.
   *
   * @param \App\Models\User $parent
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $parent ): JsonResponse
    {
        $parent->delete();

        return response()->json([
            'data' => [
                'parent' => $parent,
            ],
            'message' => 'Parent Deleted Successfully.'
        ]);
    }
}
