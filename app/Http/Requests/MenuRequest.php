<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
          'dish_name' => 'required | max:50',
          'dish_img' => 'image | file',
          'material_1' => 'required | max:50', 'amount_1' => 'required:', 'unit_1' => 'required | max:10',
          'material_2' => 'string | max:50', 'amount_2' => 'nullable', 'unit_2' => 'string | max:10',
          'material_3' => 'string | max:50', 'amount_3' => 'nullable', 'unit_3' => 'string | max:10',
          'material_4' => 'string | max:50', 'amount_4' => 'nullable', 'unit_4' => 'string | max:10',
          'material_5' => 'string | max:50', 'amount_5' => 'nullable', 'unit_5' => 'string | max:10',
          'material_6' => 'string | max:50', 'amount_6' => 'nullable', 'unit_6' => 'string | max:10',
          'material_7' => 'string | max:50', 'amount_7' => 'nullable', 'unit_7' => 'string | max:10',
          'material_8' => 'string | max:50', 'amount_8' => 'nullable', 'unit_8' => 'string | max:10',
          'material_9' => 'string | max:50', 'amount_9' => 'nullable', 'unit_9' => 'string | max:10',
          'material_10' => 'string | max:50', 'amount_10' => 'nullable', 'unit_10' => 'string | max:10',
          'material_11' => 'string | max:50', 'amount_11' => 'nullable', 'unit_11' => 'string | max:10',
          'material_12' => 'string | max:50', 'amount_12' => 'nullable', 'unit_12' => 'string | max:10',
          'material_13' => 'string | max:50', 'amount_13' => 'nullable', 'unit_13' => 'string | max:10',
          'material_14' => 'string | max:50', 'amount_14' => 'nullable', 'unit_14' => 'string | max:10',
          'material_15' => 'string | max:50', 'amount_15' => 'nullable', 'unit_15' => 'string | max:10',
        ];
    }
}
