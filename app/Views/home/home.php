<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
    

<div class="kotak" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>  
            <div class="col-sm-8">
                <h1>Kenapa Rumah Guru?</h1>
                <p>Saatnya bijak dalam memilih sumber Belajar.Tak hanya yang terjamin dan berkualitas,Rumah Guru juga memiliki pengajar profesional yang siap membantu Anda.</p>
            </div>
            <div class="col-sm-2"></div>  
        </div>
        <div class="row">
            <div class="col-sm-3">
                <img src="<?= base_url('/assets/img/buku.png');?>" alt="Buku">
                <h4>Kurikulum standar industri global</h4>
                <label for="">Kurikulum dikembangkan bersama perusahaan dan pemilik teknologi dunia sesuai kebutuhan industri terkini.</label>
            </div>
            <div class="col-sm-3">
                <img src="<?= base_url('/assets/img/laptop.png');?>" alt="laptop">
                <h4>Belajar fleksibel sesuai jadwal Anda</h4>
                <label for="">Belajar kapan pun, dimana pun, secara mandiri. Bebas memilih kelas sesuai minat belajar. Akses seumur hidup ke kelas dan forum diskusi setelah.</label>
            </div>
            <div class="col-sm-3">
                <img src="<?= base_url('/assets/img/imac.png');?>" alt="laptop">
                <h4>Code Review dari developer expert</h4>
                <label for="">Validasi skill Anda melalui 1-on-1 Professional Code Review yang diberikan langsung oleh Developer Expert.</label>
            </div>
            <div class="col-sm-3">
                <img src="<?= base_url('/assets/img/orang.png');?>" alt="laptop">
                <h4>Alumni terpercaya di berbagai perusahaan</h4>
                <label for="">Sertifikat yang membuktikan pengetahuan fundamental serta keterampilan nyata yang diinginkan perusahaan global.</label>
            </div>

        </div>
    </div>
</div>








<?= $this->endSection()   ; ?>