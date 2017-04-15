@extends('admin_index')


@section('css')
	<!-- DataTables CSS -->
	{!! Html::style('plugins/datatables/dataTables.bootstrap.css') !!}
	<!-- DataTables Responsive CSS -->
	{!! Html::style('plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') !!}

@stop


@section('content')

<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Daftar Kecamatan</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
<!-- 						<div class="panel-heading">
								Kode dan Nama Provinsi

						</div>
 -->						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
								<a class="btn btn-success" href="{!! URL::to('admin/kecamatan/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Kecamatan</a>
							</div>
							<div class="dataTable_wrapper">
									<table class="table table-striped table-bordered table-hover" id="tabel-kecamatan">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Kecamatan</th>
												<th>Nama Kecamatan</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($kec as $kecamatan)
											<tr>
												<td class="center">
													{{ $row++ }}
												</td>
												<td class="center">
													{{ $kecamatan->kode_kecamatan }}
												</td>
												<td class="center">
													{{ $kecamatan->nama_kecamatan, ['size' => 3] }}
												</td>
												<td class="center">
														<a class="btn btn-xs btn-success" href="{{ URL::to('admin/kecamatan/'.$kecamatan->id.'/edit') }}"><i class="fa fa-edit fa-fw"></i> Edit</a>
														&nbsp;&nbsp;
														<a class="btn btn-xs btn-danger" href="{{ URL::to('admin/kecamatan/delete/'.$kecamatan->id) }}" data-token="{!! csrf_token() !!} " data-method="delete" data-confirm="Anda yakin menghapus data Kecamatan?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
												</td>
											</tr>
											@endforeach
										</tbody>
								 </table>
					 </div>
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
	<!-- DataTables JavaScript -->
	{!! Html::script('plugins/datatables/jquery.dataTables.min.js', array('type' => 'text/javascript')) !!}
	{!! Html::script('plugins/datatables/dataTables.bootstrap.min.js', array('type' => 'text/javascript')) !!}

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
			$('#tabel-kecamatan').DataTable({
							responsive: true,
							bSort : false,
              language: {
                "sProcessing":   "Sedang memproses...",
                "sLengthMenu":   "Tampilkan _MENU_ entri",
                "sZeroRecords":  "Tidak ditemukan data Kecamatan.",
                "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                "sInfoPostFix":  "",
                "sSearch":       "Cari:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Pertama",
                    "sPrevious": "Sebelumnya",
                    "sNext":     "Selanjutnya",
                    "sLast":     "Terakhir"
                }
              },
              "columnDefs": [
                { "orderable": false, "targets": 0 },
								{ width: 20, targets: 0 }
              ]
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
	{!! Html::script('js/laravel.js', array('type' => 'text/javascript')) !!}

@stop
