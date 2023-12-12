<?php

namespace App\Http\Controllers\Student\Syllabus;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Syllabus;

class SyllabusShowController extends Controller
{
  /**
   * Show syllabus.
   *
   * @param \App\Models\Syllabus $syllabus
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( Syllabus $syllabus ): JsonResponse
    {
        return response()->json([
            'data' => [
                'syllabus' => $syllabus,
            ],
            'message' => 'Syllabus Show Successful.',
        ]);
    }
}
