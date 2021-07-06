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
            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/pp.jpg');?>" alt=""> Tambah Admin</h1>
           
        </div>
        
        <div class="kontainer putih mt-3">
            <h5>Tambah User Admin</h5>
            <p>Isi Is Admin dengan angka 1 untuk dijadikan sebagai Admin</p>
            <?php if(session()->getFlashdata('pesan')) :?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan')   ; ?>
            </div>
            <?php endif; ?>
            <form action="" method="post">
                <?= csrf_field()   ; ?>
                   
                    <div class="form-group">
                        
                        <input type="text" name="id"  class="form-control" placeholder="Id" autocomplete="off"
                        value="<?= $dataadmin['id'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="namalengkap"  class="form-control" placeholder="Nama Lengkap" autocomplete="off"value="<?= $dataadmin['namalengkap'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="username"  class="form-control" placeholder="Username" autocomplete="off"value="<?= $dataadmin['username'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control"placeholder="Email" autocomplete="off"
                        value="<?= $dataadmin['email'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off"value="<?= $dataadmin['password'] ; ?>" disabled>
                       
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="konfirmasipassword" class="form-control" placeholder="Konfirmasi Password" autocomplete="off" value="<?= $dataadmin['konfirmasipassword'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="datecreated"  class="form-control" placeholder="Date Created" autocomplete="off" value="<?= $dataadmin['datecreated'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="is_active"  class="form-control" placeholder="Is Active" autocomplete="off" value="<?= $dataadmin['is_active'] ; ?>" disabled>
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="text" name="is_admin"  class="form-control" placeholder="Is Admin" autocomplete="off"value="<?= $dataadmin['is_admin'] ; ?>" >
                        
                    </div>
                    
                    
                    <input type="submit" value="Tambah Admin" class="btn btn-primary">
                    <a href="/admin/datauser" class="btn btn-light">Kembali</a>
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

<?= $this->endSection()   ; ?>
