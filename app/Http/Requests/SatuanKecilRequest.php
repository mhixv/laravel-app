<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SatuanKecilRequest extends Request {

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
			'kode_satuan_kecil' => 'required',
			'nama_satuan_kecil' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_satuan_kecil.required' => 'Kode Satuan Kecil tidak boleh kosong',
			'nama_satuan_kecil.required' => 'Nama Satuan Kecil tidak boleh kosong'
		];
	}

}
