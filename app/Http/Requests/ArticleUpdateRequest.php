<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
            'gambar'        => 'nullable|mimes:jpeg,png|max:6000',
            "judul"         => "required|min:5",
            "deskripsi"     => "required|min:10",
            "category_id"   => "required|integer|exists:categories,id"
        ];
    }
}
