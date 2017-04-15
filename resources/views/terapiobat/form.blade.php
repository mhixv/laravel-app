<div class="form-group">
	{!! Form::label('kode_terapi_obat', 'Kode Terapi Obat :') !!}
	{!! Form::text('kode_terapi_obat',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_terapi_obat', 'Nama Terapi Obat :') !!}
	{!! Form::text('nama_terapi_obat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
