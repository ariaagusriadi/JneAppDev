<?php

namespace Modules\JneSurat\Http\Requests\Ceo;

use Illuminate\Foundation\Http\FormRequest;

class TerimaSuratStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file_surat_pdf' => 'required|file|mimes:pdf',
            'keterangan_surat_ceo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'file_surat_pdf.required' => 'file surat harus di isi dengan file pdf',
            'keterangan_surat_ceo.required' => 'keterangan surat harus di isi',
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
