<?php

namespace App\Http\Controllers\Teacher\BookList;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\BookList;

class BookListShowController extends Controller
{
  /**
   * Show bookList.
   *
   * @param \App\Models\BookList $bookList
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( BookList $bookList ): JsonResponse
    {
        return response()->json([
            'data' => [
                'bookList' => $bookList,
            ],
            'message' => 'Book List Show Successful.',
        ]);
    }
}
