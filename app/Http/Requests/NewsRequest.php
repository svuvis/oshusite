<?php

namespace App\Http\Requests;

class NewsRequest extends Request
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
            $slug_rule = 'required|min:3|max:255|unique:oshu_news,slug,'.$this->get('id');
        }
        else
        {
            $slug_rule = 'required|min:3|max:255|unique:oshu_news';
        }
        return [
            'title' => 'required|min:3|max:90',
            'slug' => $slug_rule,
            'body' => 'required',
        ];
    }
}
