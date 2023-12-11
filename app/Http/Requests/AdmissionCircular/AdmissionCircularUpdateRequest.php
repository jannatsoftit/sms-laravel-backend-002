<?php

namespace App\Http\Requests\AdmissionCircular;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionCircularUpdateRequest extends FormRequest
{
  /**
   * Determine if the AdmissionCircular is authorized to make this request.
   *
   * @return bool
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages(): array
  {
    return [];
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules(): array
  {
    return [
      'title' => 'required',
    ];
  }
}

