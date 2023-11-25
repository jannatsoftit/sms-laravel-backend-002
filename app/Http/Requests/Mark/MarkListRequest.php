<?php

namespace App\Http\Requests\Mark;

use Illuminate\Foundation\Http\FormRequest;

class MarkListRequest extends FormRequest
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
   * Prepare the data for validation.
   *
   * @return void
   */
  protected function prepareForValidation(): void
  {
    if ($this->filled('columns')) {
      $this->merge([
        'columns' => explode(',', $this->query('columns')),
      ]);
    }
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */

  public function rules(): array
  {

    return [
        'columns' => 'nullable|array|min:1',
        'columns.*' => 'required|alpha_dash|distinct|in:*,student_name,total_marks,grade_point,class_name,letter_grade,section,comment',
        // 'page' => 'nullable|integer|min:1',
        // 'perPage' => 'nullable|integer|in:10,25,50,100',
    ];

  }
}
