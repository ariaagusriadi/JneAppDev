<?php

namespace Modules\JnePegawai\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'nik' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'harus di isi tidak boleh kosong',
            'nik.required' => 'harus di isi tidak boleh kosong',
            'email.required' => 'harus di isi tidak boleh kosong',
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
