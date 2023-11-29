<?php

namespace App\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class SchoolStoreRequest extends FormRequest
{
  /**
   * Determine if the School is authorized to make this request.
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
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'facebook_page' => 'required',
        'status' => 'required',
    ];
  }
}
