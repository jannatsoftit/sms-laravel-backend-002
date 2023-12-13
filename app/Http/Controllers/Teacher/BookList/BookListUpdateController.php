<?php

namespace App\Http\Controllers\Teacher\BookList;

use App\Http\Requests\BookList\BookListUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\BookList;

class BookListUpdateController extends Controller
{
  /**
   * Update bookList.
   *
   * @param \App\Http\Requests\BookList\BookListUpdateRequest $request
   * @param \App\Models\BookList $bookList
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(BookListUpdateRequest $request, BookList $bookList): JsonResponse
    {
        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'bookList' => $bookList->update([
                    'book_name' => $validated['book_name'],
                ]),
            ],
            'message' => 'Book List updated successfully.',
        ]);

    }
}
