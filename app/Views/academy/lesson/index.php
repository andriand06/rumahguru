<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>



<div class="breadcrumb">
    <p><a href="/dashboard/">Beranda</a> / <a href="/academy/list">Academy</a> / <?= $kelas['nama']; ?></p>
</div>


<div id="wrapper">
    
    
    
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><?= $kelas['nama']; ?><sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">



        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
        <div class="sidebarButton">
                <a href="/academy/diskusi/matematika" class="btn btn-light mt-3 full">Diskusikan Materi</a>
                <a href="/academy/lapor/matematika" class="btn btn-light mt-3  full">Laporkan Materi</a>
            
        </div>
        <div class="sidebarSearch mt-3">
                <h5 style="margin-left: 10px;"> Daftar Modul</h5>
                <form action="" id="formcari">
                    <input type="text" id="cari" class="form-control"  style="margin-left:10px;width:90%;" placeholder="Masukkan Kata Kunci" onkeyup="CariModul()">
                </form>
            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Persiapan Belajar</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Persiapan Belajar</h6>
                    <a class="collapse-item active" href="/academy/my" selected>Persetujuan Hak Cipta</a>
                    <a class="collapse-item" href="/academy/exams">Mekanisme Belajar</a>
                    <a class="collapse-item" href="/academy/submission">Forum Diskusi</a>
                    <a class="collapse-item" href="/academy/submission">Glosarium</a>
                    <a class="collapse-item" href="/academy/submission">Daftar Referensi</a>
                </div>
            </div>
            
        </li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThird"
                aria-expanded="true" aria-controls="collapseThird">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pengantar Kelas</span>
            </a>
            <div id="collapseThird" class="collapse" aria-labelledby="headingThird" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pengantar Kelas</h6>
                    <a class="collapse-item active" href="/academy/my" selected>Pengantar</a>
                    <a class="collapse-item" href="/academy/exams">Ikhtisar</a>
                    <a class="collapse-item" href="/academy/submission">Quiz</a>
                </div>
            </div>
        </li>
    </ul>
    <!-- End of Sidebar -->
    <div id="content-wrapper" >
        <div id="content" class="flex">
            <div class="kontainer putih">
                
                <div class="mt-3">
                    <h1>Kelas <?= $lesson['title'][0];?> </h1>
                    <p>Kelas academy tersedia bagi yang belum memiliki kemampuan
                    (dasar) hingga yang sudah profesional.</p>
                </div>
          
                <div class="row">
                    <div class="mt-3">
                       
                        <!-- <?php //for($i=0;$i<count($lessons['modul']);$i++) : 

                                use function PHPUnit\Framework\once;

?>
                        <h6><?//= $lessons['submodul'][$i]   ; ?></h6>
                        <p class="mt-3"><?//= $lessons['deskripsi'][$i]   ; ?></p>
                        <?//php endfor ;?> -->
                        <?php foreach($materi as $m)   : ?>
                            
                        
                        
                       
                    <?php if($id === $m['idkelas'])   : ?>
                        
                    <p><?= $m['submodul']   ; ?></p>
                    <p><?= $m['deskripsi']   ; ?></p>
                    <?php if($m['video'] !== '')   : ?>
                    <video width="480" height="360" controls>
                        <source src=<?= base_url('/upload/'.$m['video'].'')  ; ?> type="video/mp4">
                    </video>
                    <?php  endif  ; ?>
                    <?php if($m['gambar'] !== '')   : ?>
                        <img src="<?= base_url('/upload/'.$m['gambar'].'')?>" alt="" class="img-thumbnail">
                    <?php endif   ; ?>
                    <?php endif   ; ?>
                    <?php endforeach   ; ?>
                    </div>
                   
                </div>
                   
                   <?= $pager->links()    ; ?>

                    
                   
            </div>
            <div class="testimonial mt-3 mx-5">
                <h5>Apa kata lulusan Rumah Guru?</h5>
                <p>Sudah banyak siswa yang sukses belajar di Rumah Guru. Mau tau pendapat dari sisi mereka? Ini adalah testimoni asli mereka. Mau tahu lebih banyak?</p>
                <div class="row mt-5">
                    <div class="col-4">
                        <div class="headerWrapper">
                            <h5>Andrian Davinta <img class="image" src="/assets/img/pp.jpg" alt="Profile"></h5>
                            <h6>SMP Xaverius 1</h6>
                            <span>Lulusan Kelas Matematika</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga aut recusandae perferendis iste dolores nobis laborum non ad ab facilis fugit voluptates inventore, asperiores ullam provident quae culpa magni.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="headerWrapper">
                            <h5>Andrian Davinta</h5>
                            <img class="image" src="/assets/img/pp.jpg" alt="Profile">
                            <h6>SMP Xaverius 1</h6>
                            <span>Lulusan Kelas Matematika</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga aut recusandae perferendis iste dolores nobis laborum non ad ab facilis fugit voluptates inventore, as  periores ullam provident quae culpa magni.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="headerWrapper">
                            <h5>Andrian Davinta <img class="image" src="/assets/img/pp.jpg" alt="Profile"></h5>
                            <h6>SMP Xaverius 1</h6>
                            <span>Lulusan Kelas Matematika</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga aut recusandae perferendis iste dolores nobis laborum non ad ab facilis fugit voluptates inventore, asperiores ullam provident quae culpa magni.</p>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()   ; ?>