<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DefaultSettingStoreRequest extends FormRequest
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
            'name' => 'required',
            'timer' => 'required',
            'group_id' => 'required',
        ];
    }
}
