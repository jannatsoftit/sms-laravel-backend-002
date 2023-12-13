<?php

namespace App\Http\Controllers\Teacher\Mark;

use App\Http\Requests\Mark\MarkUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Mark;

class MarkUpdateController extends Controller
{
  /**
   * Update mark.
   *
   * @param \App\Http\Requests\Mark\MarkUpdateRequest $request
   * @param \App\Models\Mark $mark
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(MarkUpdateRequest $request, Mark $mark): JsonResponse
    {
        $validated = $request->validated();

        if(!empty($validated['file'])){

            $file = $validated['file'];
            $fileName = time().'.'.$file->getClientOriginalExtension();
            // admin image save in storage file:
            $file->storeAs('public/AD_img', $fileName);
            $newFile = $fileName;

        }else{
            $newFile = '';
        }

        if(!empty($validated['file'])){

        return response()->json([
            'data' => [
                $validated = $request->validated(),
                'mark' => $mark->update([
                    'student_name' => $validated['student_name'],
                    'class_name' => $validated['class_name'],
                    //'file' => $fileName,
                ]),
            ],
            'message' => 'Exam Result file updated successfully.',
        ]);

        }elseif(empty($validated['file'])){

            return response()->json([
                'data' => [
                    $validated = $request->validated(),
                    'mark' => $mark->update([
                        'student_name' => $validated['student_name'],
                        'class_name' => $validated['class_name'],
                        //'file' => $fileName,
                    ]),
                ],
                'message' => 'Exam Result file updated successfully.',
            ]);
        }
    }

}
