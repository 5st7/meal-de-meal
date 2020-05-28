<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRecodeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                    'meal_name' => 'required|max:255',
                    'meal_limitday' => 'required',
                    'meal_price' => 'required|integer|max:255',
                    'meal_category' => 'required',
                    'meal_image' => 'required|image',
                ];
    }
}
