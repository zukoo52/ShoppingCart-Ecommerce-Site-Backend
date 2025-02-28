<?php

namespace Modules\ProductManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
     *          'product_price',
     *    'product_stock_level',
     *    'category_id',
     */
    public function rules()
    {
        return [
            "product_code" => "required|string|unique:products",
            "product_name" => "required|string",
            "product_price" => "required|integer",
            "supply_qualtity" => "required|integer",
            "category_id" => "required|integer",
        ];
    }
}
