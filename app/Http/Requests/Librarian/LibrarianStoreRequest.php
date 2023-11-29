<?php

namespace App\Http\Requests\Librarian;

use Illuminate\Foundation\Http\FormRequest;

class LibrarianStoreRequest extends FormRequest
{
  /**
   * Determine if the Librarian is authorized to make this request.
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
        'phone_number' => 'required',
        'date_of_birth' => 'required',
        'address' => 'required',
        'blood_group' => 'required',
        'designation' => 'required',
        'department' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required',
        'image' => 'required|image|mimes:jpg,png,jpeg,svg,gif,webp|max:2048',
        'gender' => 'required',
    ];
  }
}
