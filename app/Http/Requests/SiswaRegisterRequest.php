<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRegisterRequest extends FormRequest
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
            "nama"          => "required",
            "no_induk"      => 'required|numeric|unique:siswas,no_induk',
            "asal_sekolah"  => "required",
            "email"         => "required|string|email|unique:siswas,email",
            "password"     =>  "required|string|min:8"
        ];
    }
}
