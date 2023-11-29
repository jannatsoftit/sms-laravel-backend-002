<?php

namespace App\Http\Requests\ClassRoutine;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoutineUpdateRequest extends FormRequest
{
  /**
   * Determine if the ClassRoutine is authorized to make this request.
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
        'day' => 'required',
        'class_name' => 'required',
        'subject_name' => 'required',
        'paper' => 'required',
        'class_time' => 'required',
    ];
  }
}

