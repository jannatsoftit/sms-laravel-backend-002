<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
{
  /**
   * Determine if the Admin is authorized to make this request.
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
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'designation' => 'required',
      'department' => 'required',
      'password' => 'required',
      'user_information' => 'required',
      'image' => 'required',
      'gender' => 'required',
    ];
  }
}
