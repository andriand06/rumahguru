<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
<div class="container">
    <p><a href="/dashboard/">Beranda</a> / <a href="/academy/list">Academy</a> / Daftar Kelas</p>
</div>
<div class="kontainer putih">
    <div class="kartu biru">
        <h1>Daftar Kelas</h1>
        <p>Kelas academy tersedia bagi yang belum memiliki kemampuan
         (dasar) hingga yang sudah profesional.</p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card"  style="width: 20rem; margin-left:40px">
                <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <input type="text" class="search" placeholder="Cari Kelas">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                    <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                    <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                    <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                    <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="row mt-5" >
            <div class="col-md-4">
                <div class="card" style="width: 20rem; margin-left:40px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                        <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 20rem; margin-left:8px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                        <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 20rem; margin-left:15px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                        <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

<?= $this->endSection()   ; ?>