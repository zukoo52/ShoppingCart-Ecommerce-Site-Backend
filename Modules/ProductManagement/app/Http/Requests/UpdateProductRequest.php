<?php

namespace Modules\ProductManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "id" => "required|integer",
            "product_code" => "required|string",
            "product_name" => "required|string",
            "product_price" => "required|integer",
            "supply_qualtity" => "required|integer",
            "category_id" => "required|integer"
        ];
    }
}
