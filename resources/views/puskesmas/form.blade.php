<div class="form-group">
	{!! Form::label('kode_puskesmas', 'Kode Puskesmas :') !!}
	{!! Form::text('kode_puskesmas',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nama_puskesmas', 'Nama Puskesmas :') !!}
	{!! Form::text('nama_puskesmas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kecamatan_id', 'Nama Kecamatan :') !!}
	{!! Form::select('kecamatan_id',['0' => 'Pilih Kecamatan']+$kec, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kelurahan_id', 'Nama Kelurahan :') !!}
	{!! Form::select('kelurahan_id',['0' => 'Pilih Kelurahan']+$kel, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
