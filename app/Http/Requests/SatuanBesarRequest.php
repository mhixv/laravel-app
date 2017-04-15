<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SatuanBesarRequest extends Request {

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
			'kode_satuan_besar' => 'required',
			'nama_satuan_besar' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_satuan_besar.required' => 'Kode Satuan Besar tidak boleh kosong',
			'nama_satuan_besar.required' => 'Nama Satuan Besar tidak boleh kosong'
		];
	}

}
