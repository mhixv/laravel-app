<div class="form-group">
	{!! Form::label('nip_pegawai', 'NIP Pegawai :') !!}
	{!! Form::text('nip_pegawai',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_pegawai', 'Nama Pegawai :') !!}
	{!! Form::text('nama_pegawai', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
