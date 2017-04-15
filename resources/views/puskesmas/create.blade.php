@extends('admin_index')

@section('content')
<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Menambah Puskesmas</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-6">
				<div class="panel panel-default">
						<div class="panel-heading">
								Menambah Puskesmas
						</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
											{!! Form::open(['url' => 'admin/puskesmas', 'role' => 'form']) !!}
												@include('puskesmas.form', ['text' => 'Simpan'])
											{!! Form::close() !!}

											<div class="row">
												<div class="col-md-12">
													@include('errors.list')
												</div>
											</div>
									</div>
								</div>
								<!-- /.row (nested) -->
						</div>
						<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@stop

@section('script')
<script>
$(document).ready(function() {
		$("#kecamatan_id").change(function() {
				$.getJSON("{{ URL::to('/admin/listkelurahan/') }}/" + $("#kecamatan_id").val(), function(data) {
						var $stations = $("#kelurahan_id");
						$stations.empty();
						$.each(data, function(index, value) {
								$stations.append('<option value="' + index +'">' + value + '</option>');
						});
				$("#kelurahan_id").trigger("change"); /* trigger next drop down list not in the example */
				});
		});
});

</script>
@stop
