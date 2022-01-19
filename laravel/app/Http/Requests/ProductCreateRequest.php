<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255', 'min:5'],
            'description' => ['max:500'],
            'code' => ['max:5'],
            'price' => [],
            'category_id' => ['required'],
            'image_path' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
}
