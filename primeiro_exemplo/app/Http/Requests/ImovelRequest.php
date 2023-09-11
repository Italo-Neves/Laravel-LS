<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
            'titulo'=>'bail|required|min:3|max:100',// esse ultimo parametro impede que um campo não alterado de um registro bloqueie a atleração de todo registro
            'cidade_id'=>'bail|required|integer',
            'tipo_id'=>'bail|required|integer',
            'finalidade_id'=>'bail|required|integer',
            'preco'=>'bail|required|numeric|min:0',
            'dormitorios'=>'bail|required|integer|min:0',
            'salas'=>'bail|required|integer|min:0',
            'terreno'=>'bail|required|integer|min:0',
            'banheiros'=>'bail|required|integer|min:0',
            'garagens'=>'bail|required|integer|min:0',
            'descricao'=>'bail|nullable|string',
            'rua'=>'bail|required|min:1|max:100',
            'numero'=>'bail|required|integer',
            'complemento'=>'bail|nullable|string',
            'bairro'=>'bail|required|min:3|max:50',
            'proximidades'=>'bail|nullable|array'
        ];
    }

    /**
     * Customizando o nom dos campos para as mensagens de erro
     */

    public function attributes(){
        return [
            'cidade_id'=>'Cidade',
            'tipo_id'=>'Tipo',
            'finalidade_id'=>'Finalidade',
            'descricao'=>'Descrição',
            'preco'=>'Preço',
            'numero'=>'Número',
            'rua'=>'Rua',
            'titulo'=>'Título',
            'dormitorio'=>'Dormitório',
            'salas'=>'Salas',
            'garagem'=>'Garagem',
            'terreno'=>'Terreno',
            'bairro'=>'Bairro',

        ];
    }

    /**
     * Customizando as mensagens de erro para uma regra ou para um campo/regra
     */

    public function messages(){
        return [
            'finalidade_id.required'=>'Favor Selecionar uma opção',
            'titulo.min'=>'Favor inserir pelo menos :min caracteres para o campo :attribute'
        ];
    }

}
