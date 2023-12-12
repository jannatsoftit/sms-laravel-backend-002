<?php

namespace App\Http\Controllers\Admin\AdmissionCircular;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmissionCircular\AdmissionCircularListRequest;
use App\Models\AdmissionCircular;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdmissionCircularListController extends Controller
{
  /**
   * List admissionCircular.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AdmissionCircularListRequest $request): JsonResponse
    {
        return response()->json([
            'data' => [
                'admissionCirculars' => AdmissionCircular::where('school_id', 1)->get(
                    $columns = [
                        'id',
                        'title',
                    ],
                ),
            ],

            'message' => 'Admission Circular list successful.',
        ]);
    }

 }
