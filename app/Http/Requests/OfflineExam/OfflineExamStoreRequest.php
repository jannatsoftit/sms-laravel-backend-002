<?php

namespace App\Http\Requests\OfflineExam;

use Illuminate\Foundation\Http\FormRequest;

class OfflineExamStoreRequest extends FormRequest
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
        'paper' =>'required',
        'class_name' => 'required',
        'section' => 'required',
        'subject_code' => 'required',
        'date_time' => 'required',
        'exam_start_time' => 'required',
        'exam_end_time' => 'required',
        'building_name' =>'required',
        'room_number' => 'required',
        'total_marks' => 'required',
    ];
  }
}
