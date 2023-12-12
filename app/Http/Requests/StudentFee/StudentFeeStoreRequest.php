<?php

namespace App\Http\Requests\StudentFee;

use Illuminate\Foundation\Http\FormRequest;

class StudentFeeStoreRequest extends FormRequest
{
  /**
   * Determine if the StudentFee is authorized to make this request.
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
        'invoice_no' => 'required',
        'student' => 'required',
        'invoice_title' => 'required',
        'total_amount' => 'required',
        'paid_amount' => 'required',
        'status' => 'required',
        'school_id' => '1',
    ];
  }
}
