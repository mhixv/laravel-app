<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ObatRequest extends Request {

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
			'kode_obat' => 'required',
			'nama_obat' => 'required',
			'golongan_obat_id' => 'required|not_in:0',
			'satuan_besar_id' => 'required|not_in:0',
			'satuan_kecil_id' => 'required|not_in:0',
			'generic' => 'required',
			'terapi_obat_id' => 'required|not_in:0',
			'fraction' => 'required',
			'singkatan' => 'required'
		];
	}

	public function messages()
	{
		return [
			'kode_obat.required' => 'Kode Obat tidak boleh kosong',
			'nama_obat.required' => 'Nama Obat tidak boleh kosong',
			'golongan_obat_id.required' => 'Golongan Obat tidak boleh kosong',
			'golongan_obat_id.not_in' => 'Golongan Obat tidak boleh kosong',
			'satuan_besar_id.required' => 'Satuan Besar Obat tidak boleh kosong',
			'satuan_besar_id.not_in' => 'Satuan Besar Obat tidak boleh kosong',
			'satuan_kecil_id.required' => 'Satuan Kecil Obat tidak boleh kosong',
			'satuan_kecil_id.not_in' => 'Satuan Kecil Obat tidak boleh kosong',
			'generic.required' => 'Generic tidak boleh kosong',
			'terapi_obat_id.required' => 'Jenis Terapi Obat tidak boleh kosong',
			'terapi_obat_id.not_in' => 'Jenis Terapi Obat tidak boleh kosong',
			'fraction.required' => 'Fraction Obat tidak boleh kosong',
			'singkatan.required' => 'Singkatan Obat tidak boleh kosong'
		];
	}

}
