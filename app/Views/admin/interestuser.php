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
            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/pp.jpg');?>" alt=""> Data Interest User</h1>
       
        </div>
        
        <div class="kontainer putih mt-3">
            <h5>Tabel Interest User</h5>
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
                    <th scope="col">Username</th>
                    <th scope="col">Interest</th>
                    <th scope="col">No Telp</th>
                    

                    </tr>
                </thead>
                <tbody>
               
                   <?php foreach ($interest as $i) : ?>
                   <tr>
                        <td><?= $i['id']  ; ?></td>
                        <td><?= $i['username']  ; ?></td>
                        <td><?= $i['interest']  ; ?></td>
                        <td><?= $i['phone']  ; ?></td>
                    
                        
                        
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
