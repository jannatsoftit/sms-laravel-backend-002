<?php

namespace App\Http\Controllers\Student\BookList;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookList\BookListListRequest;
use App\Models\BookList;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookListListController extends Controller
{
  /**
   * List bookList.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(BookListListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'bookLists' => BookList::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'book_name',
                    ],
                ),
            ],

            'message' => 'Book List list successful.',
        ]);
    }

 }
