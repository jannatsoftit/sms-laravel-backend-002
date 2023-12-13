<?php

namespace App\Http\Controllers\Teacher\BookList;

use App\Http\Requests\BookList\BookListStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\BookList;

class BookListStoreController extends Controller
{
  /**
   * Store bookList.
   *
   * @param \App\Http\Requests\BookList\BookListStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(BookListStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'bookList' => BookList::create([
                    'book_name' => $validated['book_name'],
                ]),
            ],
            'message' => 'Book List Store Successful.',
        ]);
   }

}
