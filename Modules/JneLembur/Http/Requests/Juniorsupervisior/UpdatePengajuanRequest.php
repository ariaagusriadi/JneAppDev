<?php

namespace Modules\JneLembur\Http\Requests\juniorsupervisior;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePengajuanRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tanggal_spl' => 'required',
            'devisi' => 'required',
            'lokasi_lembur' => 'required',
            'tanggal_lembur' => 'required',
            'lembur_pada_hari' => 'required',
            'alasan_lembur' => 'required',
            'file_list_terima' => 'required|file|mimes:pdf,docx,doc',
        ];
    }
    public function messages()
    {
        return [
            'tanggal_spl.required' => 'tanngal harus di isi',
            'devisi.required' => 'devisi harus di isi',
            'lokasi_lembur.required' => 'lokasi lembur harus di isi',
            'tanggal_lembur.required' => 'tanggal lembur harus di isi',
            'lembur_pada_hari.required' => 'lembur pada hari harus di isi ',
            'alasan_lembur.required' => 'alasan lembur harus di isi',
            'file_list_terima.required' => 'file karyawan yang di setujui harus di isi',
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
