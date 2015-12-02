<?php

namespace App\Http\Requests;

class FacultiesRequest extends Request
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
        if ($this->method() == 'PATCH')
        {
            $slug_rule = 'required|min:3|max:50|unique:faculties,slug,'.$this->get('id');
        }
        else
        {
            $slug_rule = 'required|min:3|max:50|unique:faculties';
        }
        return [
            'title' => 'required|min:3|max:45',
            'slug' => $slug_rule,
        ];
    }
}
