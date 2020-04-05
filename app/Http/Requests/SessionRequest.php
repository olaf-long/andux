<?php

namespace App\Http\Requests;


class SessionRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required'
        ];
    }
}
