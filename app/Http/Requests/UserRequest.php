<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class UserRequest extends FormRequest
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
            'last-name' => 'required|max:10',
            'first-name' => 'required|max:10',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'email' => ':attributeが正しくありません。',
            'max' => [
                'string' => ':attributeは:max文字以内で入力してください。',
            ],
            'size' => [
                'string' => ':attributeは:size文字で入力してください。',
            ],
            'numeric' => ':attributeは数字で入力してください。',
            'required' => ':attributeは必須項目です。',
        ];
    }

    public function attributes()
    {
        return [
            'last-name'      => '姓',
            'first-name' => '名',
            'email'     => 'メールアドレス',
            'postcode' => '郵便番号',
            'address' => '住所',
            'opinion' => 'ご意見'
        ];
    }
}
