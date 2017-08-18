<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RsclitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'machine_no' => 'required',
            'model_no' => 'required',
            'package' => 'required',
            'date_started' => 'required|date',
            'date_finished' => 'required|date|after:date_started',
            'work_week' => 'required'
        ];
    }
}
