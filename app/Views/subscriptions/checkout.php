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
        <div class="col-md-3">Pilih Metode Pembayaran</div>
        <div class="col-md-9">
            <h6>Untuk Pembelian paket</h6>
            <p>Paket Langganan: <?= $isi['days']   ; ?> Hari,seharga (Rp <?= $isi['price']   ; ?>) <label id="Days"></label></p>
           
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
        <p>Virtual Account adalah metode pembayaran yang praktis,cepat dan mudah tanpa harus melakukan konfirmasi pembayaran secara manual.</p>
                    <p>Pilih Bank</p>  
            <div class="d-flex">
                <div class="dropdown me-1">
                    <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                    
                    Transfer Bank
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                    <li><a class="dropdown-item" href="#">BCA -  88881111</a></li>
                    <li><a class="dropdown-item" href="#">BRI - 8888812323</a></li>
                    <li><a class="dropdown-item" href="#">BNI - 888812312</a></li>
                    </ul>
                </div>
                
            </div>
            <p>Setelah melakukan Transfer Bank, silahkan Anda Upload Bukti Pembayaran dibawah berikut ini.</p>
            <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('error')   ; ?>
            </div>
            <?php endif; ?>
            <form action="/subscriptions/upload" method="post" enctype="multipart/form-data">
                <?= csrf_field()   ; ?>
                <div class="mb-3">
                <label for="bukti" class="form-label">Upload Bukti Pembayaran</label>
                <input type="file" id="bukti" class="form-control" name="bukti">
                </div>
                <input type="submit" value="Upload" class="btn btn-primary">


            </form>
        </div>
    </div>
    </div>
</div>


<?= $this->endSection()   ; ?>