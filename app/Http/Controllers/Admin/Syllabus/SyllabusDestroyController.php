<?php

namespace App\Http\Controllers\Admin\Syllabus;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class SyllabusDestroyController extends Controller
{
  /**
   * Delete syllabus.
   *
   * @param \App\Models\Syllabus $syllabus
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Syllabus $syllabus ): JsonResponse
    {
        $syllabus->delete();

        return response()->json([
            'data' => [
                'syllabus' => $syllabus,
            ],
            'message' => 'Syllabus Deleted Successfully.'
        ]);
    }
}
