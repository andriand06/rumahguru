<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/all.css');?>">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/bootstrap/sbadmin/vendor/fontawesome-free/css/all.min.css');?>" >
    <link  rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
       >

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('/bootstrap/sbadmin/css/sb-admin-2.min.css');?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Daftar Bukti</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bukti Pembayaran</h6>
            <a class="collapse-item active" href="/admin/index" selected>Daftar Bukti</a>

        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThird"
        aria-expanded="true" aria-controls="collapseThird">
        <i class="fas fa-fw fa-cog"></i>
        <span>User</span>
    </a>
    <div id="collapseThird" class="collapse" aria-labelledby="headingThird" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User</h6>
            <a class="collapse-item active" href="/admin/datauser" selected>Data User</a>
            <a class="collapse-item active" href="/admin/profiluser" selected>Profil User</a>
            <a class="collapse-item active" href="/admin/interestuser" >Interest User</a>

        </div>
    </div>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->

<?= $this->renderSection("content")   ; ?>

<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js');?>"></script>
 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('/bootstrap/sbadmin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/bootstrap/sbadmin/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/chart.js/Chart.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('/bootstrap/sbadmin/js/demo/chart-area-demo.js');?>"></script>
    <script src="<?= base_url('/bootstrap/sbadmin/js/demo/chart-pie-demo.js');?>"></script>
</body>

    </html>