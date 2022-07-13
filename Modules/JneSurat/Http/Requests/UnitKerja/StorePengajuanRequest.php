<?php

namespace Modules\JneSurat\Http\Requests\UnitKerja;

use Illuminate\Foundation\Http\FormRequest;

class StorePengajuanRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_pengajuan' => 'required',
            'keperluan_pengajuan' => 'required',
            'file_pengantar' => 'required|file|mimes:pdf,docx,doc',
            'file_lampiran' => 'file|mimes:pdf,docx,doc'
        ];
    }
    public function messages()
    {
        return [
            'nama_pengajuan.required' => 'nama pengajuan harus di isi',
            'keperluan_pengajuan.required' => 'keperluan pengajuan harus di isi',
            'file_pengantar.required' => 'file pengantar harus di isi',
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
