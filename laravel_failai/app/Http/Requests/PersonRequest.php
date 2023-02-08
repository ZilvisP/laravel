<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:2', 'max:255'],
            'second_name' => ['required', 'string', 'min:2', 'max:255'],
            'personal_code' => ['required', 'integer', 'Personal_ID_Type_LT'],
            'email_address' => ['required', 'string', 'min:3', 'max:255', 'Email'],
            'phone_number' => ['required', 'integer', 'digits:15', 'phone_number'],
            'address_id' => ['required', 'integer', 'exists:addresses,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }


/**TODO custom validators phone_number, Personal_ID_Type_LT
 */


    public function messages()
    {
        return [
            'first_name.required' => 'We wouldn`t want send product to wrong person, do we? Name is required.',
            'first_name.string' => 'The name must contain only Latin characters. You can be playful with User name!',
            'first_name.max' => 'This is definitely the longest name we`ve heard, maybe we have another option?',
            'first_name.min' => 'Name may be too short.',

            'second_name.required' => 'We wouldn`t want send product to wrong person, do we? Last name is required.',
            'second_name.string' => 'Last name must contain only Latin characters. You can be playful with User name later on!',
            'second_name.max' => 'This is definitely the longest last name we`ve heard, maybe we have another option?',
            'second_name.min' => 'Last name may be too short.',

            'personal_code.required' => 'Identification number must be provided for authorization while doing payments.',
            'personal_code.integer' => 'Personal ID must consist numbers only.',
            'personal_code.Personal_ID_Type_LT' => 'Ups! Doesn`t seem like you are local. We currently provide services within country only.',

            'email_address.required' => 'We wouldn`t want send information about your purchase to wrong person, do we? Please provide us with email address.',
            'email_address.string' => 'Email must contain only Latin characters. You can be playful with User name later on!',
            'email_address.max' => 'This is definitely the longest email@ we`ve heard, maybe we have another option?',
            'email_address.min' => 'Email address may be too short.',
            'email_address.Email' => 'Doesn`t seem you provided valid email, please check and try again.',

            'phone_number.required' => 'We wouldn`t want send information about your purchase to wrong person, do we? Please provide us with phone number.',
            'phone_number.integer' => 'Email must contain only Latin characters. You can be playful with User name later on!',
            'phone_number.digits' => 'Phone number is to long, maybe we have another option within :digits numbers?',
            'phone_number.phone_number' => 'Doesn`t seem you provided valid phone number, please check and try again.',

            'address_id.required' => 'Address id required',
            'address_id.integer' => 'Address ID Must be type of integer',
            'address_id.exists' => 'Chosen Address ID value does not exist in our Address list, if none of Addresses match yours you can create new! ',

            'user_id.required' => 'User id required',
            'user_id.integer' => 'User ID Must be type of integer',
            'user_id.exists' => 'Chosen User ID value does not exist in our Users list, if none of Users match yours you can create new! ',


        ];
    }
}
