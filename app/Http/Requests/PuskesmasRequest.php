<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PuskesmasRequest extends Request {

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
			'kode_puskesmas' => 'required',
			'nama_puskesmas' => 'required',
			'kecamatan_id' => 'required|not_in:0',
			'kelurahan_id' => 'required|not_in:0'
		];
	}

	public function messages()
	{
		return [
			'kode_puskesmas.required' => 'Kode Puskemas tidak boleh kosong',
			'nama_puskesmas.required' => 'Nama Puskesmas tidak boleh kosong',
			'kecamatan_id.required' => 'Kecamatan tidak boleh kosong',
			'kecamatan_id.not_in' => 'Kecamatan tidak boleh kosong',
			'kelurahan_id.required' => 'Kelurahan tidak boleh kosong',
			'kelurahan_id.not_in' => 'Kelurahan tidak boleh kosong'
		];
	}

}
