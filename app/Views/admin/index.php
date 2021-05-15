
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
        <span>Daftar Bukti Pembayaran</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bukti Pembayaran</h6>
            <a class="collapse-item active" href="/admin/index" selected>Daftar Bukti</a>

        </div>
    </div>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>







</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Bukti Pembayaran</h1>
                   
                    </div>
                    
                    <div class="kontainer putih mt-3">
                        <h5>Daftar Bukti</h5>
                        <?php if(session()->getFlashdata('pesan')) :?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan')   ; ?>
                        </div>
                        <?php endif; ?>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Bukti</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if ($is_purchase == 1) : ?>
                               <?php foreach ($bukti as $b) : ?>
                               <tr>
                                    <td><?= $b['id']  ; ?></td>
                                    <td><?= $b['username']  ; ?></td>
                                    <td><?= $b['email']  ; ?></td>
                                    <td><img src="<?= base_url('/upload/bukti/'.$b['bukti'].'')?>" alt="" class="img-thumbnail"></td>
                                    <td><a href="/admin/aktivasi/<?= $b['username']; ;?>" class="btn btn-primary disabled" >Aktivasi</a></td>
                                    <td><a href="/admin/sendEmail" class="btn btn-secondary">Kirim Email</a></td>
                               </tr>
                               <?php endforeach;?>
                            <?php endif; ?>
                            <?php if($is_purchase == 0) : ?>
                                <?php foreach ($bukti as $b) : ?>
                               <tr>
                                    <td><?= $b['id']  ; ?></td>
                                    <td><?= $b['username']  ; ?></td>
                                    <td><?= $b['email']  ; ?></td>
                                    <td><img src="<?= base_url('/upload/bukti/'.$b['bukti'].'')?>" alt="" class="img-thumbnail"></td>
                                    <td><a href="/admin/aktivasi/<?= $b['username']; ;?>" class="btn btn-primary" >Aktivasi</a></td>
                                    <td><a href="/admin/sendEmail" class="btn btn-secondary">Kirim Email</a></td>
                               </tr>
                               <?php endforeach;?>
                               <?php endif;?>
                            </tbody>
                            </table>
                    </div>
                
                   
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 


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