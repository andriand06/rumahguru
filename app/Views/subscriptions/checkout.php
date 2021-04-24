<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>

<div class="container">
    <p><a href="/subscriptions/purchase">Langganan</a> / <a href="/academy/list">Mulai Berlangganan</a> / Beli Paket Langganan</p>
</div>
<div class="kontainer putih">
    <div class="container">
    <h5>Pembayaran untuk Paket Langganan</h5>
    <div class="row mt-5">
        <div class="col-md-3">
            Total Point Pembelian
        </div>
       
        <div class="col-md-3" id="Points">
            <?= $isi['point']   ; ?> Points
        </div>
        <div class="col-md-3">
            (Rp <?= $isi['price']   ; ?>)
        </div>
        <div class="col-md-3"></div>
       
    </div>
    <div class="row mt-5">
        <div class="col-md-3">
            Jumlah Tagihan
        </div>
        <div class="col-md-3">
        <?= $isi['point']   ; ?> Points
        </div>
        <div class="col-md-3">
        (Rp <?= $isi['price']   ; ?>)
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h6>Untuk Pembelian paket</h6>
            <p>Paket Langganan: <?= $isi['days']   ; ?> Hari,seharga (Rp <?= $isi['price']   ; ?>) <label id="Days"></label></p>
            <a href="" class="btn btn-info button">Beli Paket Langganan</a>
        </div>
    </div>
    </div>
</div>


<?= $this->endSection()   ; ?>