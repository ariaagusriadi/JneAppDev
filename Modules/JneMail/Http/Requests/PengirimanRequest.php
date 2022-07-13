<?php

namespace Modules\JneMail\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengirimanRequest extends FormRequest
{

    public function rules()
    {
        return [
            'subject' => 'required',
            'tujuan' => 'required',
            'file_surat' => 'required|file|mimes:pdf',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'subject surat harus di isi',
            'tujuan.required' => 'tujuan surat harus di isi',
            'file_surat.required' => 'file surat harus di isi',
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
