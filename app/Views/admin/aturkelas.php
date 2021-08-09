<?= $this->extend('wrapper/wrapperadmin')   ; ?>
<?= $this->section('content')   ; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-5">
        <?php if(session()->getFlashdata("pesan"))   : ?>
                        <div class="alert alert-success mt-5">
                            <?= session()->getFlashData("pesan")   ; ?>
                        </div>
        <?php endif   ; ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Atur Kelas</h1>
                    
            </div>
            <div class="kontainer putih mt-3">
                <h5>Daftar Kelas</h5>
                <a href="/admin/tambahkelas"  class="btn btn-primary">Tambah Kelas</a>
                <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Singkatan</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                           
                                <?php foreach ($kelas as $k) : ?>
                               <tr>
                                    <td><?= $k['id']  ; ?></td>
                                    <td><?= $k['nama']  ; ?></td>
                                    <td><?= $k['singkatan']  ; ?></td>
                                    <td><a href="/admin/editkelas/<?= $k['id']; ;?>" class="btn btn-primary" >Edit</a></td>
                                    <td><a href="/admin/hapuskelas/<?= $k['id']; ;?>" onclick="confirm('apakah anda yakin ingin menghapus kelas?')" class="btn btn-danger" >Hapus</a></td>
                                    
                               </tr>
                               <?php endforeach;?>
                              
                            </tbody>
                            </table>
                    
            </div>
        </div>
    </div>
</div>





<?= $this->endSection()   ; ?>