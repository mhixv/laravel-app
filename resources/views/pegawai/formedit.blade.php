<div class="form-group">
	{!! Form::label('city_name', 'Nama Kabupaten :') !!}
	{!! Form::text('city_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('province_id', 'Nama Provinsi :') !!}
	{!! Form::select('province_id',$prov, $kab->province_id, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
