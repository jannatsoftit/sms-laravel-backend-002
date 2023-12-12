<?php

namespace App\Http\Controllers\Admin\AdmissionCircular;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\AdmissionCircular;

class AdmissionCircularShowController extends Controller
{
  /**
   * Show admissionCircular.
   *
   * @param \App\Models\AdmissionCircular $admissionCircular
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( AdmissionCircular $admissionCircular ): JsonResponse
    {
        return response()->json([
            'data' => [
                'admissionCircular' => $admissionCircular,
            ],
            'message' => 'Admission Circular Show Successful.',
        ]);
    }
}
