<?php

namespace App\Http\Requests\Loaicongthuc;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Loaicongthuc\LoaicongthucFormRequest;

class LoaicongthucFormRequest extends FormRequest
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
            'ten_loaicongthuc' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'ten_loaicongthuc.required' => 'Vui lòng nhập tên danh mục'

        ];
    }
}
