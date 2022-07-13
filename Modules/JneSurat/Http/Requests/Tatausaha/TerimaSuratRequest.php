<?php

namespace Modules\JneSurat\Http\Requests\Tatausaha;

use Illuminate\Foundation\Http\FormRequest;

class TerimaSuratRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'draft_surat' => 'required|file|mimes:pdf,docx,doc',
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'perihal_surat' => 'required',
            'keterangan_surat' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'draft_surat.required' => 'draft surat harus di isi',
            'nomor_surat.required' => 'nomor surat harus di isi',
            'tanggal_surat.required' => 'tanggal surat harus di isi',
            'perihal_surat.required' => 'perihal surat harus di isi',
            'keterangan_surat.required' => 'keterangan surat harus di isi',
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
