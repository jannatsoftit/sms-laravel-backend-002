<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Requests\Admin\AdminStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class AdminStoreController extends Controller
{
  /**
   * Store admin.
   *
   * @param \App\Http\Requests\Admin\AdminStoreRequest $request
   * @return \Illuminate\Http\JsonResponse
   */

   public function __invoke(AdminStoreRequest $request): JsonResponse
   {
      return response()->json([
          'data' => [
              'admin' => User::create($request->validated()),
          ],
          'message' => 'Admin Store Successful.',
      ]);
   }

}
