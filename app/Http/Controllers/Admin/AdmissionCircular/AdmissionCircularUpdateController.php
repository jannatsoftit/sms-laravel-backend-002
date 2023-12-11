<?php

namespace App\Http\Controllers\Admin\AdmissionCircular;

use App\Http\Requests\AdmissionCircular\AdmissionCircularUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\AdmissionCircular;

class AdmissionCircularUpdateController extends Controller
{
  /**
   * Update admissionCircular.
   *
   * @param \App\Http\Requests\AdmissionCircular\AdmissionCircularUpdateRequest $request
   * @param \App\Models\AdmissionCircular $admissionCircular
   * @return \Illuminate\Http\JsonResponse
   */

    public function __invoke(AdmissionCircularUpdateRequest $request, AdmissionCircular $admissionCircular): JsonResponse
    {
        $admissionCircular->update($request->validated());

        return response()->json([
            'data' => [
                'admissionCircular' => $admissionCircular,
            ],
            'message' => 'Admission Circular updated successfully.',
        ]);

    }
}

