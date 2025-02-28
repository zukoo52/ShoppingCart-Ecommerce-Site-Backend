<?php

namespace Modules\OrderManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequests extends FormRequest
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
            'reference_id' => 'required|string|unique:orders',
            'status' => '',
            'users_id' => '',
            'products' => '',
        ];
    }
}
