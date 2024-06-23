<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'require',
            'last_name' => 'require',
            'gender' => 'require',
            'email' => ['require','email'],
            'tel' => ['require','max:5'],
            'address' => 'require',
            'category_id' => 'require',
            'detail' => ['require','max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.require' =>'姓を入力してください',
            'last_name.require' =>'名を入力してください',
            'gender.require' =>'性別を入力してください',
            'email.require' =>'メールアドレスを入力してください',
            'email.email' =>'メールアドレスはメール形式で入力してください',
            'tel.require' =>'電話番号を入力してください',    
            'tel.max' =>'電話番号を5桁以内で入力してください',    
            'category_id.require' =>'お問い合わせの種類を入力してください',    
            'detail.require' =>'お問い合わせ内容を入力してください'    
        ];
    }
}
