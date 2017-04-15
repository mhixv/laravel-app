<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class JenisObatRequest extends Request {

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
			'kode_jenis_obat' => 'required',
			'nama_jenis_obat' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_jenis_obat.required' => 'Kode Jenis Obat tidak boleh kosong',
			'nama_jenis_obat.required' => 'Nama Jenis Obat tidak boleh kosong'
		];
	}

}
