<?php

namespace Modules\JneMail\Http\Requests\Tatausaha;

use Illuminate\Foundation\Http\FormRequest;

class InboxMailStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'required:in:601,602,603,604'
        ];
    }
    public function messages()
    {
        return [
            'status.required' => 'silahkan pilih tujuan surat'
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
