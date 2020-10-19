<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            "gambar"                        => "required",
            "judul"                         => "required",
            "deskripsi"                     => "required",
            // "mata_pelajaran_id"             => null,
            // "category_program_kegiatan_id"  => $id_category
        ];
    }
}
