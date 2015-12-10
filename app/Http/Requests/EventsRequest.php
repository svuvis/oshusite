<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventsRequest extends Request
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
            'title' => 'required|max:50',
            'starttime' => 'required|date',
            'endtime' => 'required|date',
            'place' => 'required|max:45',
            'body' => 'required',
        ];
    }
}
