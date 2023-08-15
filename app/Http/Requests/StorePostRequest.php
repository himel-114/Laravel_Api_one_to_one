<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|max:255',
            'email' => 'required|max:20',
            'phone' => 'required|max:12',
            'address' => 'required|max:255',
            'department' => 'required|max:10',
            'roll_no' => 'required|max:10',
        ];
    }



    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'fullname.required' => 'A full name is required',
        'email.required' => 'A email should be valid',
        'phone.required' => 'A phone number should be maximun 12 digit',
        'address.required' => 'A address is required',
        'department.required' => 'A department is required',
        'roll_no.required' => 'A roll no is less then 10 digit',
    ];
}

}
