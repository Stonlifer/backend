<?php

namespace App\Http\Requests;

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
        return true; //disable for now
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $method = $this->method();

        if ($method == 'PUT') {
            return [
                //
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'category_id' => 'required|integer',
            ];
        }else{
        
            return [
                //
                'name' => 'sometimes|required|string|max:255',
                'price' => 'sometimes|required|numeric',
                'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'category_id' => 'sometimes|required|integer',
            ];
        }

 
    }
}
