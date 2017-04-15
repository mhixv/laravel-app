<div class="form-group">
	{!! Form::label('kode_satuan_besar', 'Kode Satuan Besar :') !!}
	{!! Form::text('kode_satuan_besar',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_satuan_besar', 'Nama Satuan Besar :') !!}
	{!! Form::text('nama_satuan_besar', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
