<?php

namespace Modules\JneAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePegawaiRequest extends FormRequest
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
            'password' => 'required|min:8',
            'jenis_kelamin' => 'required',
            'unit_kerja' => 'required',
            'foto' => 'required',
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
