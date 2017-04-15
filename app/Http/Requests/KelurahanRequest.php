<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class KelurahanRequest extends Request {

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
			'kode_kelurahan' => 'required',
			'nama_kelurahan' => 'required',
			'kecamatan_id' => 'required|not_in:0'
		];
	}

	public function messages()
	{
		return [
			'kode_kelurahan.required' => 'Kode Kelurahan tidak boleh kosong',
			'nama_kelurahan.required' => 'Nama Kelurahan tidak boleh kosong',
			'kecamatan_id.required' => 'Kecamatan tidak boleh kosong',
			'kecamatan_id.not_in' => 'Kecamatan tidak boleh kosong'
		];
	}

}
