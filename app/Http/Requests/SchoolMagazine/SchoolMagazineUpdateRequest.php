<?php

namespace App\Http\Requests\SchoolMagazine;

use Illuminate\Foundation\Http\FormRequest;

class SchoolMagazineUpdateRequest extends FormRequest
{
  /**
   * Determine if the SchoolMagazine is authorized to make this request.
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
        'magazine_name' => 'required',
    ];
  }
}

