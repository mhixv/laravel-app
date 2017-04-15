<div class="form-group">
	{!! Form::label('kode_kelurahan', 'Kode Kelurahan :') !!}
	{!! Form::text('kode_kelurahan',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_kelurahan', 'Nama Kelurahan :') !!}
	{!! Form::text('nama_kelurahan', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kecamatan_id', 'Nama Kecamatan :') !!}
	{!! Form::select('kecamatan_id',['0' => 'Pilih Kecamatan']+$kec, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
