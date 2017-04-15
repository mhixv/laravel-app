@extends('admin_index')

@section('content')
<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Menambah Terapi Obat</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-6">
				<div class="panel panel-default">
						<div class="panel-heading">
								Menambah Terapi Obat
						</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
											{!! Form::open(['url' => 'admin/terapiobat', 'role' => 'form']) !!}
												@include('terapiobat.form', ['text' => 'Simpan'])
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
