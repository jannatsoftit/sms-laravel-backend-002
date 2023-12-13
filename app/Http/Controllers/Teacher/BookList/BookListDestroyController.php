<?php

namespace App\Http\Controllers\Teacher\BookList;

use App\Http\Controllers\Controller;
use App\Models\BookList;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class BookListDestroyController extends Controller
{
  /**
   * Delete bookList.
   *
   * @param \App\Models\BookList $bookList
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( BookList $bookList ): JsonResponse
    {
        $bookList->delete();

        return response()->json([
            'data' => [
                'bookList' => $bookList,
            ],
            'message' => 'Book List Deleted Successfully.'
        ]);
    }
}
