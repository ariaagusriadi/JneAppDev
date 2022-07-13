<?php

namespace Modules\JneSurat\Http\Requests\UnitKerja;

use Illuminate\Foundation\Http\FormRequest;

class FormatSuratRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_format_surat' => 'required',
            'file_format_surat' => 'required|file|mimes:pdf,docx,doc',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
