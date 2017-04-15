<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GolonganObatRequest extends Request {

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
			'kode_golongan_obat' => 'required',
			'nama_golongan_obat' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_golongan_obat.required' => 'Kode Golongan Obat tidak boleh kosong',
			'nama_golongan_obat.required' => 'Nama Golongan Obat tidak boleh kosong'
		];
	}

}
