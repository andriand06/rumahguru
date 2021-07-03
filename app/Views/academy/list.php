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
    <?php if (isset($is_purchase)) : ?>
    <?php if($is_purchase == 1) : ?>
    
    <div class="row">
        <div class="col-md-3">
            <form method="" action="">
            <div class="card"  style="width: 20rem; margin-left:40px">
                <div class="card-body">
                        <h5>Filter</h5>
                        <input type="text" class="search" id="cari" placeholder="Cari Kelas" onkeyup="Cari()">
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar Matematika</a></h5>
                    <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Belajar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/geology.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar Geografi</a></h5>
                    <p class="card-text">Pelajari Geografi dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Belajar Sekarang</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card" style="width: 20rem; margin-left:40px">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/biology.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar Biologi</a></h5>
                    <p class="card-text">Pelajari Biologi dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Belajar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-5" >
            <div class="col-md-3">
                <div class="card" style="width: 20rem; margin-left:40px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/astronomy.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" ><a href="" id="title">Belajar Astronomi</a></h5>
                        <p class="card-text">Pelajari Astronomi dengan kurikulum terlengkap.</p></p>
                        <a href="/academy/matematika" class="btn btn-info button">Belajar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 20rem; margin-left:2px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/chemistry.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" ><a href="" id="title">Belajar Science</a></h5>
                        <p class="card-text">Pelajari Science dengan kurikulum terlengkap.</p></p>
                        <a href="/academy/matematika" class="btn btn-info button">Belajar Sekarang</a>
                    </div>
                </div>
            </div>
            
        </div>  
    
    <?php endif ; ?>
    <?php endif; ?>
    <?php if(!isset($is_purchase)) : ?>
        <div class="row">
        <div class="col-md-3">
            <form id="cari" action="">
            <div class="card"  style="width: 20rem; margin-left:40px">
                <div class="card-body">
                        <h5>Filter</h5>
                        <input type="text" class="search" id="cari" placeholder="Cari Kelas" onkeyup="Cari()">
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="" id="title">Belajar Matematika</a></h5>
                    <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/geology.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar Geografi</a></h5>
                    <p class="card-text">Pelajari Geografi dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card" style="width: 20rem; margin-left:40px">
                <img class="card-img-top" src="<?= base_url('/assets/img/png/biology.png');?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" ><a href="" id="title">Belajar Biologi</a></h5>
                    <p class="card-text">Pelajari Biologi dengan kurikulum terlengkap.</p></p>
                    <a href="/academy/matematika" class="btn btn-info button">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
        <div class="row mt-5" >
            <div class="col-md-3">
                <div class="card" style="width: 20rem; margin-left:40px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/astronomy.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" ><a href="" id="title">Belajar Astronomi</a></h5>
                        <p class="card-text">Pelajari Astronomi dengan kurikulum terlengkap.</p></p>
                        <a href="/academy/matematika" class="btn btn-info button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 20rem; margin-left:2px">
                    <img class="card-img-top" src="<?= base_url('/assets/img/png/chemistry.png');?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" ><a href="" id="title">Belajar Science</a></h5>
                        <p class="card-text">Pelajari Science dengan kurikulum terlengkap.</p></p>
                        <a href="/academy/matematika" class="btn btn-info button">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
            
        </div>  
    <?php endif;?>
</div>
        
<?= $this->endSection()   ; ?>