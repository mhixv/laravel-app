<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Farmasi | Dinas Kesehatan Kabupaten Kampar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-green.min.css') }}">

  @yield('css')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IFA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIFA</b> Kab.Kampar</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Manajemen Sistem</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Data Badan Hukum</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Pengguna Aplikasi</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Backup Database</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Seting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Seting Aplikasi</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Pengguna Aplikasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master Data Farmasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! URL::to('admin/pegawai') !!}"><i class="fa fa-circle-o"></i> Pegawai</a></li>
            <li><a href="{!! URL::to('admin/obat') !!}"><i class="fa fa-circle-o"></i> Obat</a></li>
            <li><a href="{!! URL::to('admin/hargaobat') !!}"><i class="fa fa-circle-o"></i> Harga Obat</a></li>
            <li><a href="{!! URL::to('admin/golonganobat') !!}"><i class="fa fa-circle-o"></i> Golongan Obat</a></li>
            <li><a href="{!! URL::to('admin/terapiobat') !!}"><i class="fa fa-circle-o"></i> Terapi Obat</a></li>
            <li><a href="{!! URL::to('admin/jenisobat') !!}"><i class="fa fa-circle-o"></i> Jenis Obat</a></li>
            <li><a href="{!! URL::to('admin/satuanbesar') !!}"><i class="fa fa-circle-o"></i> Satuan Besar</a></li>
            <li><a href="{!! URL::to('admin/satuankecil') !!}"><i class="fa fa-circle-o"></i> Satuan Kecil</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Demografi dan Puskemas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! URL::to('admin/puskesmas') !!}"><i class="fa fa-circle-o"></i> Puskemas</a></li>
            <li><a href="{!! URL::to('admin/kecamatan') !!}"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
            <li><a href="{!! URL::to('admin/kelurahan') !!}"><i class="fa fa-circle-o"></i> Kelurahan/ Desa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Obat Masuk</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Obat Keluar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Stok Obat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Informasi/Laporan Stok</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Informasi Stock</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> View Penerimaan</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> View Pengeluaran</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Laporan Master</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Laporan Transaksi</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Rekap Obat Masuk</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Rekap Obat Keluar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Informasi Obat Puskemas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> View Stok</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> View Pakai</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> View Keluar</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @if (session()->has('pesan.message'))
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-{{ session()->get('pesan.level') }} fade in top10 bottom7">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! session()->get('pesan.message') !!}
        </div>
      </div>
    </div>
    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Content will be place right here! -->
      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Kabupaten Kampar</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


<script>
   $(document).on('ready', function() {
        var url = window.location;
        // Will only work if string in href matches with location
        $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
        $('.treeview-menu li a[href="' + url + '"]').parent().parent().parent().addClass('active');
        // Will also work for relative and absolute hrefs
        // $('.treeview-menu li a').filter(function() {
        //     return this.href == url;
        // }).parent().parent().parent().addClass('active');
    });
</script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>

@yield('script')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
