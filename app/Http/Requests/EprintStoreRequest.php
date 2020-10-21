<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EprintStoreRequest extends FormRequest
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
            "cover"                         => "required",
            "banner"                        => "required",
            "judul"                         => "required",
            "deskripsi"                     => "required",
            // "mata_pelajaran_id"             => "nullable|integer|exists:mata_pelajarans,id",
            // "category_program_kegiatan_id"  => "required|integer|exists:category_program_kegiatans,id",
            "category_eprint_id"            => "required|integer|exists:category_eprints,id",
        ];
    }
}
