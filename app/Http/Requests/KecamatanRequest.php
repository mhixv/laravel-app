<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class KecamatanRequest extends Request {

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
			'kode_kecamatan' => 'required',
			'nama_kecamatan' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_kecamatan.required' => 'Kode Kecamatan tidak boleh kosong',
			'nama_kecamatan.required' => 'Nama Kecamatan tidak boleh kosong'
		];
	}

}
