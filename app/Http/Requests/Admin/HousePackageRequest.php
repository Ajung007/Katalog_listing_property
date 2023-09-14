<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HousePackageRequest extends FormRequest
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
        'title' => 'required|max:255', 
        'location' => 'required|max:255', 
        'about' => 'required', 
        'maps' => 'required|max:255', 
        'bedrooms' => 'required|max:255', 
        'bathups' => 'required|max:255',
        'doors' => 'required|max:255', 
        'living' => 'required|max:255', 
        'tipe' => 'required|max:255', 
        'building_area' => 'required|max:255', 
        'surface_area' => 'required|max:255', 
        'total_units' => 'required|max:255',
        'remain_units' => 'required|max:255', 
        'project_facilities' => 'required', 
        'point_of_interest' => 'required', 
        'supporting_facilities' => 'required', 
        'name_person' => 'required|max:255',
        'no_hp' => 'required|max:255', 
        'lowest_price' => 'required|max:255', 
        'highest_price' => 'required|max:255'
        ];
    }
}
