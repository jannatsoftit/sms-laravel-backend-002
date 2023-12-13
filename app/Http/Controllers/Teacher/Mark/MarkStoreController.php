<?php

namespace App\Http\Controllers\Teacher\Mark;

use App\Http\Requests\Mark\MarkStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Mark;

class MarkStoreController extends Controller
{
  /**
   * Store mark.
   *
   * @param \App\Http\Requests\Mark\MarkStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(MarkStoreRequest $request): JsonResponse
   {

    if($request->has('file')){

        $file = $request->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();

        // result file save in storage file:
        $file->storeAs('public/ER_img', $fileName);

       return response()->json([
           'data' => [
                'mark' => Mark::create([
                    'student_name' => $request->student_name,
                    'class_name' => $request->class_name,
                    //'file' => $fileName,
                ]),
            ],
            'message' => 'Mark Store Successful.',
        ]);
    }
   }

}
