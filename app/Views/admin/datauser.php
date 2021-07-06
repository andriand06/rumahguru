<?= $this->extend('wrapper/wrapperadmin')   ; ?>
<?= $this->section('content')   ; ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  

    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/pp.jpg');?>" alt=""> Data User</h1>
       
        </div>
        
        <div class="kontainer putih mt-3">
            <h5>Tabel Data User</h5>
            <?php if(session()->getFlashdata('pesan')) :?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan')   ; ?>
            </div>
            <?php endif; ?>
            <div class="tablescroll">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Konfirmasi Password</th>
                    <th scope="col">Datecreated</th>
                    <th scope="col">Is Active</th>
                    <th scope="col">Is Admin</th>
                    <th scope="col">Aksi</th>
                    

                    </tr>
                </thead>
                <tbody>
               
                   <?php foreach ($data as $d) : ?>
                   <tr>
                        <td><?= $d['id']  ; ?></td>
                        <td><?= $d['namalengkap']  ; ?></td>
                        <td><?= $d['username']  ; ?></td>
                        <td><?= $d['email']  ; ?></td>
                        <td><?= $d['password']  ; ?></td>
                        <td><?= $d['konfirmasipassword']  ; ?></td>
                        <td><?= $d['datecreated']  ; ?></td>
                        <td><?= $d['is_active']  ; ?></td>
                        <td><?= $d['is_admin']  ; ?></td>
                        <td><a href="/admin/tambahadmin/<?= $d['username']   ; ?>" class="btn btn-primary">Tambah Admin</a></td>
                      
                        
                        
                   </tr>
                   <?php endforeach;?>
    
                
                </tbody>
                </table>
                </div>
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
