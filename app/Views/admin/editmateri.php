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
                            <h1 class="h3 mb-0 text-gray-800"><img src="<?= base_url('/assets/img/buku.png');?>" alt=""> Edit Materi</h1>
                    
            </div>
            <div class="kontainer putih mt-3">
                <h5>Edit Materi</h5>
                <a href="/admin/aturmateri"  class="btn btn-primary">Kembali</a>
                <form action="/admin/updatemateri/<?= $materi['submodul']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field()   ; ?>
                    <div class="mb-3">
                        <label for="idkelas" class="form-label">Id Kelas</label>
                        <input type="text"  class="form-control" id="idkelas" name="idkelas" value="<?= $materi['idkelas']; ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="modul" class="form-label">Modul</label>
                        <input type="text"  class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="modul" name="modul" value="<?= $materi['modul']; ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="submodul" class="form-label">Sub Modul</label>
                        <input type="text"  class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="submodul" name="submodul" value="<?= $materi['submodul']; ?>" >
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea cols="50" rows="8" class="ckeditor form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" name="deskripsi" ><?= $materi['deskripsi']; ?> </textarea>
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
                        <input type="file" class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="video" name="video" value="<?= $materi['video'] ?>"></input>
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control <?//= ($val->hasError('id')) ? 'is-invalid' : '' ;?>" id="gambar" name="gambar" value="<?= $materi['gambar'] ?>"></input>
                        <div class="invalid-feedback" style="color:red">
                            <?//= $val->getError('id')   ; ?>
                        </div>
                     </div>
                     <input type="submit" value="Edit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection()   ; ?>