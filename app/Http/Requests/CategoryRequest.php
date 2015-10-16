<?php

namespace Autoservicios\Http\Requests;

use Autoservicios\Http\Requests\Request;

class CategoryRequest extends Request
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
            'category'  => 'required|min:3',
            'header'    => 'required|min:3',
            'descrip'   => 'required|min:10',
            'ico'       => 'required|min:3',
            'slug'      => 'unique'
        ];
    }
}
