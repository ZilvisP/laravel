<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'country' => ['required', 'string', 'max:255'],
                'city' => ['required', 'string', 'max:255'],
                'street' => ['required', 'string', 'max:255'],
                'post_code' => ['required', 'integer', 'digits_between:1,10']
        ];
    }


    public function messages()
    {
        return [
            'country.required' => 'Country name is required.',
            'country.string' => 'The country name must contain only Latin characters.',
            'country.max' => 'The maximum length of the country name must be :max characters.',

            'city.required' => 'City name is required.',
            'city.string' => 'The city name must consist of Latin characters.',
            'city.max' => 'The maximum length of the city name must be :max characters.',

            'street.required' => 'Street name is required.',
            'street.string' => 'The street name must contain only Latin characters.',
            'street.max' => 'The maximum length of the street name must be :max characters.',


            'post_code.required' => 'Postal code is required',
            'post_code.integer' => 'The postal code must consist of numbers only.',
            'post_code.digits_between' => 'The length of the postal code must be between :min and :max digits.'
        ];
    }
}


