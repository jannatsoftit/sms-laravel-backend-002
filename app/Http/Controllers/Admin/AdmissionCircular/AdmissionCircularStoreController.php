<?php

namespace App\Http\Controllers\Admin\AdmissionCircular;

use App\Http\Requests\AdmissionCircular\AdmissionCircularStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\AdmissionCircular;

class AdmissionCircularStoreController extends Controller
{
  /**
   * Store admissionCircular.
   *
   * @param \App\Http\Requests\AdmissionCircular\AdmissionCircularStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(AdmissionCircularStoreRequest $request): JsonResponse
   {

       return response()->json([
           $validated = $request->validated(),
           'data' => [
                'admissionCircular' => AdmissionCircular::create([
                    'title' => $validated['title'],
                    'school_id' => '1',
                ]),
            ],
            'message' => 'Admission Circular Store Successful.',
        ]);
   }

}
