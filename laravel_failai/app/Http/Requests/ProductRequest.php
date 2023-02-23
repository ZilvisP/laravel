<?php

namespace App\Http\Requests;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest implements ProductRequestInterface
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
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'slug' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string', 'min:3'],

//            'image' => ['nullable', 'max_file_size'],

            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'color' => ['nullable', Rule::in(['Red','Green','Blue','Black','White'])],

            'size' => ['nullable', Rule::in(['XS','S','M','L','XL'])],
            'price' => ['required', 'integer', 'min:0'],
            'status_id' => ['required', 'integer', 'exists:statuses,id'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => 'Product name required',
            'name.string' => 'The name must contain only Latin characters',
            'name.min' => 'The minimum name length must be :min characters',
            'name.max' => 'The maximum name length must be :max characters',

            'slug.required' => 'Slug is required',
            'slug.string' => 'Slug must consist of Latin characters',
            'slug.min' => 'The minimum Slug length must be :min characters',
            'slug.max' => 'The maximum Slug length must be :max characters',

            'description.string' => 'Description must consist of Latin characters',
            'description.min' => 'A description is not required, but if entered, must be no shorter than :min characters',

            /** TODO custom rule for file size
             * 'image.max_file_size' => 'File size is to big for Upload, try again after resize',
             */
            'category_id.required' => 'Category id required',
            'category_id.integer' => 'Category ID Must be type of integer',
            'category_id.exists' => 'Chosen Category ID value does not exist in category table, if none of categories suits your needs you can create one! ',

            'color.in_array' => 'We apologize for the inconvenience, the selected color no longer exists in our assortment',
            'size.in_array' => 'We apologize for the inconvenience, the selected size no longer exists in our assortment',

            'price.required' => 'We would like free products and unfortunately we don`t have them at the moment, maybe in the future?',


            'status_id.required' => 'Status id required',
            'status_id.integer' => 'Status ID Must be type of integer',
            'status_id.exists' => 'Chosen Status ID value does not exist in category list, if none of statuses match your needs you can create one! ',
        ];
    }
}
