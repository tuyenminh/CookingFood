<?php

namespace App\Http\Requests\Loaikhoahoc;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Loaikhoahoc\LoaikhoahocFormRequest;

class LoaikhoahocFormRequest extends FormRequest
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
            'ten_loaikhoahoc' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_loaikhoahoc.required' => 'Vui lòng nhập loại khóa học',
        ];
    }
}
