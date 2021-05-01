<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>


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
    <div class="sidebar-brand-text mx-3">Academy <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Progress Belajar</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Progress Belajar</h6>
            <a class="collapse-item active" href="/academy/my" selected>Kelas</a>
            <a class="collapse-item" href="/academy/exams">Exam</a>
            <a class="collapse-item" href="/academy/submission">Submission</a>
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
                        <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Kelas</h1>
                   
                    </div>
                    <p>Kelas</p>
                    <div class="kontainer putih mt-3">
                        <h5>Kelas yang sedang dipelajari</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                <td>Mark</td>
                                <td>Otto</td>
                               
                                </tr>
                               
                            
                            </tbody>
                            </table>
                    </div>
                    <div class="kontainer putih mt-5">
                        <h5>Kelas yang sudah lulus</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                <td>Mark</td>
                                <td>Otto</td>
                               
                                </tr>
                               
                            
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

 





<?= $this->endSection()   ; ?>