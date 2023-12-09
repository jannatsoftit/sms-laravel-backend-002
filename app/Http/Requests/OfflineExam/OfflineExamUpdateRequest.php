<?php

namespace App\Http\Requests\OfflineExam;

use Illuminate\Foundation\Http\FormRequest;

class OfflineExamUpdateRequest extends FormRequest
{
  /**
   * Determine if the OfflineExam is authorized to make this request.
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
        'exam_name' => 'required',
        //'class_name' => 'required',
        'exam_start_time' => 'required',
        'exam_end_time' => 'required',
        'total_marks' => 'required',
    ];
  }
}

