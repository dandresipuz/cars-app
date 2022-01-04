<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            // Edit Form
            return  [
                'nombre'      => 'required',
                'apellido'    => 'required',
                'documento'   => 'required|numeric|regex:/^[0-9]$/|unique:users,cedula,' . $this->id,
                'departamento_id'   => 'required',
                'city_id'           => 'required',
                'telefono'          => 'required|numeric|regex:/^[3][0-3][0-9]{8}$/',
                'email'     => 'required|email|unique:users,email,' . $this->id,
                'habeas'            => 'required',

            ];
        } else {
            //Create form
            return [
                'name'              => 'required',
                'apellido'          => 'required',
                'documento'         => 'required|numeric|regex:/^[0-9]$/|unique:users',
                'departamento_id'   => 'required',
                'city_id'           => 'required',
                'telefono'          => 'required|numeric|regex:/^[3][0-3][0-9]{8}$/',
                'email'             => 'required|email|unique:users',
                'habeas'            => 'required',
            ];
        }
    }
}
