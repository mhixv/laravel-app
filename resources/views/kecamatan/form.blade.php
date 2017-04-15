<div class="form-group">
	{!! Form::label('kode_kecamatan', 'Kode Kecamatan :') !!}
	{!! Form::text('kode_kecamatan',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_kecamatan', 'Nama Kecamatan :') !!}
	{!! Form::text('nama_kecamatan', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
