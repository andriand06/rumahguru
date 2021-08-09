<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>

    <div class="breadcrumb">
    <p><a href="/dashboard/">Beranda</a> / <a href="/academy/list">Academy</a> / Daftar Kelas</p>
    </div>
<div class="kontainer putih">
    <div class="kartu biru">
        <h1>Daftar Kelas</h1>
        <p>Kelas academy tersedia bagi yang belum memiliki kemampuan
         (dasar) hingga yang sudah profesional.</p>
    </div>
    <?php if ($is_purchase === 1 || $trial === 1) : ?>
    <div class="row">
        <div class="col-md-3">
            <form method="" action="">
            <div class="card"  style="width:16rem; margin-left:40px">
                <div class="card-body">
                        <h5>Filter</h5>
                        <input type="text" class="search" id="cari" placeholder="Cari Kelas" onkeyup="Cari()">
                </div>
            </div>
            </form>
        </div>
        <?php foreach($kelas as $k) : ?>
        <div class="col-md-3">
            <div class="card" style="width:16rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar <?= $k['nama'];?></a></h5>
                    <p class="card-text">Pelajari <?= $k['nama'];?> dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/lesson/<?= $k['id'];?>" class="btn btn-info button">Belajar Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach ; ?>
    
    <?php endif ; ?>

    <?php if(!isset($is_purchase) || $is_purchase === null || $is_purchase === 0 && $trial === null) : ?>
        <div class="row">
        <div class="col-md-3">
            <form id="cari" action="">
            <div class="card"  style="width:16rem; margin-left:40px">
                <div class="card-body">
                        <h5>Filter</h5>
                        <input type="text" class="search" id="cari" placeholder="Cari Kelas" onkeyup="Cari()">
                </div>
            </div>
            </form>
        </div>
        <?php foreach($kelas as $k) : ?>
        <div class="col-md-3">
            <div class="card" style="width:16rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Daftar <?= $k['nama'];?></a></h5>
                    <p class="card-text">Pelajari <?= $k['nama'];?> dengan kurikulum terlengkap.</p></p>
                    <a href="/subscriptions/purchase" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach ; ?>
    <?php endif;?>
</div>
        
<?= $this->endSection()   ; ?>