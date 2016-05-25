<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

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
			'codigoproducto'=>'required|min:3|unique:productos,codigoproducto',
			'nombreproducto'=> 'required|min:3:productos,nombreproducto',
			'codigotipo'=> 'required|max:2:productos,codigotipo',
		];
	}

}
