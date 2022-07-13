<?php

namespace Modules\JneLembur\Http\Requests\kordinatorbidang;

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
            'jabatan' => 'required',
            'tanggal_pengajuan' => 'required',
            'hari_lembur' => 'required',
            'tanggal_lembur' => 'required',
            'jam_mulai_lembur' => 'required',
            'jam_selesai_lembur' => 'required',
            'jumlah_orang_lembur' => 'required',
            'lokasi_kantor_lembur' => 'required',
            'lembur_pada_hari' => 'required',
            'alasan_lembur' => 'required',
            'file_list_karyawan' => 'required|file|mimes:pdf,docx,doc',
        ];
    }
    public function messages()
    {
        return [
            'jabatan.required' => 'jabatan harus di isi',
            'tanggal_pengajuan.required' => 'tanggal pengajuan harus di isi',
            'hari_lembur.required' => 'hari lembur harus di isi',
            'tanggal_lembur.required' => 'tanggal lembur harus di isi',
            'jam_mulai_lembur.required' => 'jam mulai lembur harus di isi',
            'jam_selesai_lembur.required' => 'jam selesai lembur harus di isi',
            'jumlah_orang_lembur.required' => 'jumlah orang lembur harus di isi',
            'lokasi_kantor_lembur.required' => 'lokasi kantor lembur harus di isi',
            'lembur_pada_hari.required' => 'lembur pada hari harus di isi',
            'alasan_lembur.required' => 'alasan lembur harus di isi',
            'file_list_karyawan.required' => 'file list karyawan harus di isi',
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
