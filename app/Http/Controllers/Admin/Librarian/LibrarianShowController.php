<?php

namespace App\Http\Controllers\Admin\Librarian;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;

class LibrarianShowController extends Controller
{
  /**
   * Show Librarian.
   *
   * @param \App\Models\User $librarian
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( User $librarian ): JsonResponse
    {
        return response()->json([
            'data' => [
                'librarian' => $librarian,
            ],
            'message' => 'Librarian Show Successful.',
        ]);
    }
}
