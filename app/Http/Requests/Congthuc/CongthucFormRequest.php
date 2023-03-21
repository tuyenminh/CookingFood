<?php

namespace App\Http\Requests\Congthuc;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Congthuc\CongthucFormRequest;

class CongthucFormRequest extends FormRequest
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
            'ma_ct' => 'required',
            'ten_mon' => 'required',
            'cach_lam' => 'required',
            'tg_nau' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'ma_ct.required' => 'Vui lòng nhập mã món',
            'ten_mon.required' => 'Vui lòng nhập tên món',
            'cach_lam.required' => 'Vui lòng nhập cách làm',
            'tg_nau.required' => 'Vui lòng chọn thời gian nấu'
        ];
    }
}
