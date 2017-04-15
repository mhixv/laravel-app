<div class="form-group">
	{!! Form::label('kode_jenis_obat', 'Kode Jenis Obat :') !!}
	{!! Form::text('kode_jenis_obat',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_jenis_obat', 'Nama Jenis Obat :') !!}
	{!! Form::text('nama_jenis_obat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
