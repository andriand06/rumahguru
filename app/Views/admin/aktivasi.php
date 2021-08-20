
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
        <span>Aktivasi</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Aktivasi</h6>
            <a class="collapse-item active" href="/admin/aktivasi" selected>Aktivasi</a>

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
                <div class="container-fluid mt-5">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Aktivasi Akun</h1>
                   
                    </div>
                
                    <div class="kontainer putih mt-3">
                        <a href="/admin"class="btn btn-secondary">Kembali ke Halaman Utama</a>
                        <h5>Aktivasi</h5>
                        <?php if(session()->getFlashdata('pesan')) :?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan')   ; ?>
                        </div>
                        <?php endif; ?>
                        <form action="/admin/proses" method="post">
                            <?= csrf_field()   ; ?>
                            <div class="mb-3">
                                <label for="id" class="form-label">No</label>
                                <input type="text"  class="form-control <?= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="id" name="id" value="<?= $isi['id'];?>" >
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('id')   ; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text"  class="form-control  <?= ($val->hasError('username')) ? 'is-invalid' : '' ;?>" id="username" name="username" value="<?= $isi['username'];?>" >
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('username')   ; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text"  class="form-control <?= ($val->hasError('email')) ? 'is-invalid' : '' ;?>" id="email" name="email"value="<?= $isi['email'];?>" >
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('email')   ; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="langganan_id" class="form-label">Id Langganan</label>
                                <input type="text"  class="form-control <?= ($val->hasError('langganan_id')) ? 'is-invalid' : '' ;?>" id="langganan_id" name="langganan_id" value="<?= $isi['langganan_id'];?>">
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('langganan_id')   ; ?>
                                </div>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="is_purchase" class="form-label">Active</label>
                                <input type="text"  class="form-control <?//= ($val->hasError('is_purchase'))? 'is-invalid' : '' ;?>" id="is_purchase" name="is_purchase">
                                <div class="invalid-feedback" style="color:red">
                                    <?//= $val->getError('is_purchase')   ; ?>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label for="datestart" class="form-label">Date Start</label>
                                <input type="text"  class="form-control <?= ($val->hasError('datestart'))? 'is-invalid' : '' ;?>" id="datestart" name="datestart" value="<?= $isi['datestart'];?>" >
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('datestart')   ; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="dateend" class="form-label">Date End</label>
                                <input type="date"  class="form-control <?= ($val->hasError('dateend')) ? 'is-invalid' : '' ;?>" id="dateend" name="dateend">
                                <div class="invalid-feedback" style="color:red">
                                    <?= $val->getError('dateend')   ; ?>
                                </div>
                            </div>

                            <input type="submit" value="Aktivasi" class="btn btn-primary">
                        </form>
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