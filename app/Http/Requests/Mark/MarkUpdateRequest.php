<?php

namespace App\Http\Requests\Mark;

use Illuminate\Foundation\Http\FormRequest;

class MarkUpdateRequest extends FormRequest
{
  /**
   * Determine if the Mark is authorized to make this request.
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
        'student_name' => 'required',
        'class_name' => 'required',
        //'file' => 'required|mimes:pdf,jpg,jpeg,png,doc,xls,ppt,docx,xlsx,pptx|max:14048',
    ];
  }
}

