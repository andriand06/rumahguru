<?= $this->extend('wrapper/wrapperadmin')   ; ?>
<?= $this->section('content')   ; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              

                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">
                    <?php if(session()->getFlashdata("admin"))   : ?>
                        <div class="alert alert-success mt-5">
                            <?= session()->getFlashData("admin")   ; ?>
                        </div>
                    <?php endif   ; ?>
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
                            <?php if ($is_purchase === 1) : ?>
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
                         
                                <?php foreach ($bukti as $b) : ?>
                               <tr>
                                    <td><?= $b['id']  ; ?></td>
                                    <td><?= $b['username']  ; ?></td>
                                    <td><?= $b['email']  ; ?></td>
                                    <td><img src="<?= base_url('/upload/bukti/'.$b['bukti'].'')?>" alt="" class="img-thumbnail"></td>
                                    <td><a href="/admin/aktivasi/<?= $b['username']; ;?>" class="btn btn-primary" >Aktivasi</a></td>
                                    <td><a href="/admin/sendEmail/<?= $b['email'] ;?>" class="btn btn-secondary">Kirim Email</a></td>
                               </tr>
                               <?php endforeach;?>
                             
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