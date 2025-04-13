<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Change this to true to allow the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image_home' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_home' => 'required|string|max:255',
            'categorie_id' => 'required|integer|exists:categories,categorie_id',
            'type_id' => 'required|integer|exists:types,type_id',
            'ville_id' => 'required|integer|exists:villes,ville_id',
            'price_home' => 'required|numeric',
            'reserve_home' => 'required|in:reserved,not_reserved',
            'datereserve_home' => 'nullable|date',
        ];
    }
    
}
