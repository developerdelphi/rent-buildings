<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpeciesRequest extends FormRequest
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
        switch($this->method()){
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'title' => 'required|min:5|max:191|unique:species,title'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'title' => 'required|min:5|max:191|unique:species,title'
                ];
            }
        }
    }

    public function attributes()
    {
        return[
            'title' => 'Nome da Espécie de Condomínio',
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'É necessário informar um :attribute',
            'title.min' => 'É necessário informar um :attribute com mínimo de 3 caracteres',
            'title.max' => 'É necessário informar um :attribute com máximo de 100 caracteres',
            'title.unique' => 'O :attribute informado já existe no sistema',
        ];
    }
}
