<?php

namespace Modules\JneMail\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BalasanSuratRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject_balasan' => 'required',
            'balasan_surat' => 'required|file|mimes:pdf,docx,doc'
        ];
    }

    public function messages()
    {
        return [
            'subject_balasan.required' => 'subject balasan surat harus di isi',
            'balasan_surat.required' => 'file balasan surat harus di isi'

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
