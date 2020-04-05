<?php

namespace App\Http\Requests;


class UserRequest extends FormRequest
{

    public function rules()
    {
        switch ($this->method()){
            case 'POST':
                return [
                    'name' => 'required|min:2|unique:users,name',
                    'password' => 'required|min:4',
                ];
            default:
                return [];
        }
    }
}
