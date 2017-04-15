<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PegawaiRequest extends Request {

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
			'nip_pegawai' => 'required',
			'nama_pegawai' => 'required'
		];
	}

	public function messages()
	{
		return [
			'nip_pegawai.required' => 'NIP Pegawai tidak boleh kosong',
			'nama_pegawai.required' => 'Nama Pegawai tidak boleh kosong'
		];
	}

}
