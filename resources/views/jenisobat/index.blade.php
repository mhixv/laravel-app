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
				<h1 class="page-header">Daftar Jenis Obat</h1>
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
								<a class="btn btn-success" href="{!! URL::to('admin/jenisobat/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Jenis Obat</a>
							</div>
							<div class="dataTable_wrapper">
									<table class="table table-striped table-bordered table-hover" id="tabel-jenis-obat">
										<thead>
											<tr>
												<th>No</th>
												<th>Kode Jenis Obat</th>
												<th>Nama Jenis Obat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($jo as $jenob)
											<tr>
												<td class="center">
													{{ $row++ }}
												</td>
												<td class="center">
													{{ $jenob->kode_jenis_obat }}
												</td>
												<td class="center">
													{{ $jenob->nama_jenis_obat, ['size' => 3] }}
												</td>
												<td class="center">
														<a class="btn btn-xs btn-success" href="{{ URL::to('admin/jenisobat/'.$jenob->id.'/edit') }}"><i class="fa fa-edit fa-fw"></i> Edit</a>
														&nbsp;&nbsp;
														<a class="btn btn-xs btn-danger" href="{{ URL::to('admin/jenisobat/delete/'.$jenob->id) }}" data-token="{!! csrf_token() !!} " data-method="delete" data-confirm="Anda yakin menghapus data Jenis Obat?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
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
			$('#tabel-jenis-obat').DataTable({
							responsive: true,
							bSort : false,
              language: {
                "sProcessing":   "Sedang memproses...",
                "sLengthMenu":   "Tampilkan _MENU_ entri",
                "sZeroRecords":  "Tidak ditemukan data Jenis Obat.",
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
