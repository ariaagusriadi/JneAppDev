<?php

namespace Modules\JneAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModuleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'app' => 'required',
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'url' => 'required',
            'color' => 'required',
            'tag' => 'required',
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
