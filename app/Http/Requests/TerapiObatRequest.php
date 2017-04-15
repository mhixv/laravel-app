<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TerapiObatRequest extends Request {

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
			'kode_terapi_obat' => 'required',
			'nama_terapi_obat' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_terapi_obat.required' => 'Kode Terapi Obat tidak boleh kosong',
			'nama_terapi_obat.required' => 'Nama Terapi Obat tidak boleh kosong'
		];
	}

}
