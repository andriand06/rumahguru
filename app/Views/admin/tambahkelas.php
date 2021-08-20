<?= $this->extend('wrapper/wrapperadmin')   ; ?>
<?= $this->section('content')   ; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid mt-5">
        <?php if(session()->getFlashdata("admin"))   : ?>
                        <div class="alert alert-success mt-5">
                            <?= session()->getFlashData("admin")   ; ?>
                        </div>
        <?php endif   ; ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Tambah Kelas</h1>
                    
            </div>
            <div class="kontainer putih mt-3">
                <h5>Tambah Kelas</h5>
                <a href="/admin/aturkelas"  class="btn btn-primary">Kembali</a>
                <form action="prosestambah" method="post" enctype="multipart/form-data">
                    <?= csrf_field()   ; ?>
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text"  class="form-control" id="id" name="id" value="<?= old('id'); ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kelas</label>
                        <input type="text"  class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="nama" name="nama" value="<?= old('nama'); ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan Kelas</label>
                        <input type="text"  class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="singkatan" name="singkatan" value="<?= old('singkatan'); ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="gambar" class="form-label">Ganbar Kelas</label>
                        <input type="file"  class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="gambar" name="gambar" value="<?= old('gambar'); ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <input type="submit" value="Tambah" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection()   ; ?>