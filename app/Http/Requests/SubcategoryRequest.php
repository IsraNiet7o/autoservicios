<?php

namespace Autoservicios\Http\Requests;

use Autoservicios\Http\Requests\Request;

class SubcategoryRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//NOTO HAY QUE CAMBIAR ESTE CAMPO SIEMPRE A TRUE
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'         => 'required|min:3',
            'category_id'   => 'required',
            'descrip-ini'   => 'required|min:5',
            'slug'          => 'unique'
        ];
    }
}
