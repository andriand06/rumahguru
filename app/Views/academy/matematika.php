<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>



<div class="breadcrumb">
    <p><a href="/dashboard/">Beranda</a> / <a href="/academy/matematika">Academy</a> / Matematika</p>
</div>


<div id="wrapper">
    
    
    
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Matematika<sup></sup></div>
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
  <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
        <div class="kontainer putih">
          <div class="mt-3">
              <h1>Kelas Matematika </h1>
              <p>Kelas academy tersedia bagi yang belum memiliki kemampuan
              (dasar) hingga yang sudah profesional.</p>
          </div>
          <div class="row">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Nunc eget lorem dolor sed viverra ipsum. Quisque sagittis purus sit amet volutpat. Semper feugiat nibh sed pulvinar proin gravida. Porta nibh venenatis cras sed. Posuere lorem ipsum dolor sit. Sagittis purus sit amet volutpat consequat mauris nunc congue nisi. Interdum varius sit amet mattis vulputate. Nec dui nunc mattis enim ut tellus elementum sagittis vitae. Amet mattis vulputate enim nulla aliquet porttitor. Tristique magna sit amet purus gravida quis blandit. Volutpat est velit egestas dui id ornare. Et tortor consequat id porta nibh venenatis cras sed. Pretium vulputate sapien nec sagittis aliquam malesuada. Magna eget est lorem ipsum dolor sit amet consectetur. Odio pellentesque diam volutpat commodo sed egestas. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Est ullamcorper eget nulla facilisi etiam. Tellus orci ac auctor augue.
            </p>
            <div class="mt-3">
                <h5>
                  Target dan Sasaran Siswa
                </h5>
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, culpa qui itaque esse necessitatibus pariatur ratione? Doloribus, eos officia quaerat deleniti cum eaque minima, itaque quis fuga, sunt cupiditate voluptatum! </li>
                  <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ex fugit saepe dicta rem dignissimos voluptate aut animi velit ratione ab deleniti, voluptatibus enim assumenda atque praesentium dolore vel tempora.</li>
                  <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid eligendi sequi doloremque laborum at nobis in. In molestias labore placeat amet eaque soluta natus vel, commodi hic fugit, atque eum.</li>
                  <li>Siswa harus bisa belajar mandiri, berkomitmen, benar-benar punya rasa ingin tahu, dan tertarik pada subjek materi, karena sebaik apa pun materi kelas ini, tidak akan berguna tanpa keseriusan siswa untuk belajar, berlatih, dan mencoba.</li>
                 
                </ul>
            </div>
            <div class="mt-3">
                <h5>Silabus</h5>
                <ul>
                  <li><b>Pengantar : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aspernatur maiores eaque dolor in numquam? Vel nulla deleniti vero exercitationem odit doloribus, voluptatum nihil ratione sed enim quis, eum recusandae. (45 menit)</li>
                  <li><b>Pengantar : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aspernatur maiores eaque dolor in numquam? Vel nulla deleniti vero exercitationem odit doloribus, voluptatum nihil ratione sed enim quis, eum recusandae. (45 menit)</li>
                  <li><b>Pengantar : </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aspernatur maiores eaque dolor in numquam? Vel nulla deleniti vero exercitationem odit doloribus, voluptatum nihil ratione sed enim quis, eum recusandae. (45 menit)</li>
                </ul>
            </div>
            <div class="mt-3">
                <h5>Metode Ajar</h5>
                <ul>
                  <li>Online - Self-paced Learning</li>
                    <ul>
                      <li>Total Jam Belajar : 10jam</li>
                      <li>Rekomendasi waktu belajar : 10 jam per minggu (selesai dalam 10 hari) </li>
                      <li>Anda tentukan sendiri berapa lama waktu yang akan digunakan untuk belajar materi kelas ini selama masih aktif terdaftar pada kelas
</li>
                    </ul>
                    <li>Fasilitas Pengajaran</li>
                      <ul>
                        <li>Materi bacaan elektronik : Materi akan disajikan dalam bentuk teks dan bacaan</li>
                        <li>Forum diskusi : Setiap kelas memiliki sebuah forum diskusi yang dapat Anda gunakan untuk bertanya dan berdiskusi</li>
                        <li>Evaluasi pembelajaran : Ujian akhir kelas</li>
                      </ul>
                </ul>
            </div>
            <div class="mt-3">
                <h5>Peralatan Belajar</h5>
                <ul>
                  <li>Siswa wajib memiliki akses internet melalui komputer yang menggunakan Windows/Mac/Linux</li>
                  <li></li>
                </ul>
            </div>
            <div class="mt-3">
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
            <div class="mt-3 mb-5">
                <a href="" class="btn btn-primary float-right">Lanjut</a>
                <a href="" class="btn btn-primary float-left">Kembali</a>
            </div>
          </div>

   
        </div>
      </div>
  </div>
</div>
<?= $this->endSection()   ; ?>