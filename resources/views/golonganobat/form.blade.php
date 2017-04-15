<div class="form-group">
	{!! Form::label('kode_golongan_obat', 'Kode Golongan Obat :') !!}
	{!! Form::text('kode_golongan_obat',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_golongan_obat', 'Nama Golongan Obat :') !!}
	{!! Form::text('nama_golongan_obat', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
