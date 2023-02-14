<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'slug' => ['required', 'string', 'min:2', 'max:255'],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'image' => [ 'string'],
            'description' => ['string', 'max:255'],
            'status_id' => ['required', 'integer', 'exists:statuses,id'],
            'sort_order' => ['required', 'integer'],
            'parent_id' => ['required', 'integer'],
        ];
    }

    /** TODO custom rule for file size
     * 'image.max_file_size' => 'File size is to big for Upload, try again after resize',
     */

    public function messages()
    {
        return [
            'slug.required' => 'Slug required',
            'slug.string' => 'The slug must contain only Latin characters.',
            'slug.max' => 'This is definitely the longest slug we`ve heard, maybe we have another option?',
            'slug.min' => 'slug may be too short.',
            'name.required' => 'Hard to select nameless categories? Name is required.',
            'name.string' => 'Name must contain only Latin characters.',
            'name.max' => 'This is definitely the longest category name we`ve heard, maybe we have another option?',
            'name.min' => 'Name may be too short.',

            'image.string' => 'Must contain only Latin characters.',

            'description.string' => 'Description must contain only Latin characters.',
            'description.max' => 'Description should be within :max',

            'status_id.required' => 'Status id required',
            'status_id.integer' => 'Status ID Must be type of integer',
            'status_id.exists' => 'Chosen statuses ID value does not exist in our statuses list, if none of statuses match yours you can create new! ',
            'sort_order.required' => 'Sort orders required',
            'sort_order.integer' => 'Sort orders Must be type of integer',

            'parent_id.required' => 'Parent ID required',
            'parent_id.integer' => 'Parent ID Must be type of integer',
        ];
    }
}
