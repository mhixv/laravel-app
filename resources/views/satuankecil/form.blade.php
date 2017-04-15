<div class="form-group">
	{!! Form::label('kode_satuan_kecil', 'Kode Satuan Kecil :') !!}
	{!! Form::text('kode_satuan_kecil',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_satuan_kecil', 'Nama Satuan Kecil :') !!}
	{!! Form::text('nama_satuan_kecil', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
