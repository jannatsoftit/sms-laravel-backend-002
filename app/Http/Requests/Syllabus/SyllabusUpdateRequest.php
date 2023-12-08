<?php

namespace App\Http\Requests\Syllabus;

use Illuminate\Foundation\Http\FormRequest;

class SyllabusUpdateRequest extends FormRequest
{
  /**
   * Determine if the Syllabus is authorized to make this request.
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
        'class_name' => 'required',
        // 'subject_name' => 'required',
        // 'topic' => 'required',
        // 'paper' => 'required',
    ];
  }
}

