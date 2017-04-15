<div class="form-group">
	{!! Form::label('kode_obat', 'Kode Obat :') !!}
	{!! Form::text('kode_obat',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_obat', 'Nama Obat :') !!}
	{!! Form::text('nama_obat', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('golongan_obat_id', 'Nama Golongan Obat :') !!}
	{!! Form::select('golongan_obat_id',['0' => '-- Pilih Golongan Obat --']+$go, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('jenis_obat_id', 'Nama Jenis Obat :') !!}
	{!! Form::select('jenis_obat_id',['0' => '-- Pilih Jenis Obat --']+$jo, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('satuan_besar_id', 'Nama Satuan Besar Obat :') !!}
	{!! Form::select('satuan_besar_id',['0' => '-- Pilih Satuan Besar Obat --']+$sb, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('satuan_kecil_id', 'Nama Satuan Kecil Obat :') !!}
	{!! Form::select('satuan_kecil_id',['0' => '-- Pilih Satuan Kecil Obat --']+$sk, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('generic', 'Generik :') !!}
	{!! Form::text('generic', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('terapi_obat_id', 'Nama Terapi Obat :') !!}
	{!! Form::select('terapi_obat_id',['0' => '-- Pilih Satuan Kecil Obat --']+$to, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fraction', 'Fraction :') !!}
	{!! Form::text('fraction', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('singkatan', 'Singkatan :') !!}
	{!! Form::text('singkatan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
