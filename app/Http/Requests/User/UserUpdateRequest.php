<?php

namespace App\Http\Requests\User;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'role_id' => 'nullable|integer',
        ];
    }
}
