<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;

class SubjectStoreRequest extends FormRequest
{
  /**
   * Determine if the Subject is authorized to make this request.
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
        'subject_name' => 'required',
        'class' => 'required',
        'subject_code' => 'required',
        'paper' => 'required',
    ];
  }
}
