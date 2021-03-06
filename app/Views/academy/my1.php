<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>

<div class="wrapper">
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
                        <a class="collapse-item" href="cards.html">Exam</a>
                        <a class="collapse-item" href="cards.html">Submission</a>
                    </div>
                </div>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            

           

           
          

        </ul>
        <!-- End of Sidebar -->
       
            <div class="container-fluid">
                <p><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Kelas</p>
            </div>
       
 </div>
<?= $this->endSection()   ; ?>