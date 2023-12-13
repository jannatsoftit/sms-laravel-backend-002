<?php

namespace App\Http\Controllers\Teacher\AdmissionCircular;

use App\Http\Controllers\Controller;
use App\Models\AdmissionCircular;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class AdmissionCircularDestroyController extends Controller
{
  /**
   * Delete admissionCircular.
   *
   * @param \App\Models\AdmissionCircular admissionCircular
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke( AdmissionCircular $admissionCircular ): JsonResponse
    {
        $admissionCircular->delete();

        return response()->json([
            'data' => [
                'admissionCircular' => $admissionCircular,
            ],
            'message' => 'Admission Circular Deleted Successfully.'
        ]);
    }
}
