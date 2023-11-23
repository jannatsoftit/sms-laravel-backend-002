<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LibrarianDestroyController extends Controller
{
  /**
   * Delete Librarian.
   *
   * @param \App\Models\User $librarian
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $librarian ): JsonResponse
    {
        $librarian->delete();

        return response()->json([
            'data' => [
                'librarian' => $librarian,
            ],
            'message' => 'Librarian Deleted Successfully.'
        ]);
    }
}
