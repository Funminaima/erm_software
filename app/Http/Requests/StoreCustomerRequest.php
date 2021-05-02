<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name'=> 'required|string|max:255',
            'phone'=> 'required|numeric',
            'email'=> 'required|email|max:50',
            'gender'=> 'required',
            'address'=> 'required|string|max:300',
            'city'=> 'required|string|max:255',
            'state_id'=> 'required',
        ];
    }

    public function messages(){
        return [
            'state_id.required'=>'the state field is required',
        ];
    }
}
