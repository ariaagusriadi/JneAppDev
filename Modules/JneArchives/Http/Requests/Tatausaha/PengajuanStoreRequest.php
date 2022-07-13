<?php

namespace Modules\JneArchives\Http\Requests\Tatausaha;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_dokumen' => 'required',
            'file_dokumen' => 'required|file|mimes:pdf,docx,doc',
        ];
    }

    public function messages()
    {
        return [
            'nama_dokumen.required' => 'nama dokumen harus di isi',
            'file_dokumen.required' => 'file dokumen harus di isi',
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
