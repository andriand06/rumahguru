<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>

<div class="kontainer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Daftar Biaya Belajar</h3>
                <p>Pilih paket langganan sebagai investasi
                belajar yang sesuai dengan kebutuhan Anda.</p>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url('/assets/img/png/tutorial.png');?>" alt="">
            </div>
        </div>
        
    </div>
    <div class="kartu biru">
        <h5>Paket Langganan Belajar</h5>
        <form action="/subscriptions/checkout/<?= $langganan;?>" method="post">
        <?= csrf_field(); ?>
        <select name="langganan" id="langganan">
            <option value="1" data-price="300000" data-point ="300" data-days="30 hari">Langganan 30 Hari <b>Rp 300,000</b></option>
            <option value="2" data-price="855000" data-point ="850" data-days="90 hari">Langganan 90 Hari <b>Rp 855,000</b></option>
            <option value="3" data-price="1620000" data-point="1620"data-days="180 hari">Langganan 180 Hari <b>Rp 1,620,000</b></option>
            <option value="4" data-price="2780000" data-point ="2780" data-days="365 hari">Langganan 365 Hari <b>Rp 2,780,000</b></option>
        </select>
        <label for="" id="price"></label> 
        <label for="" id="point"></label> 
        <label for="" id="days"></label> 

      
        <ul class="mt-3">
            <li>Akses penuh ke seluruh kelas di Rumah Guru.</li>
            <li>Bimbingan dan bedah soal dari para Pengajar terhadap tugas submission Anda.</li>
            <li>Sertifikat kelulusan jika Anda berhasil menyelesaikan kelas berikut submission proyek akhir dengan baik.</li>
            <li>Konsultasi sepuasnya di forum diskusi.</li>
            <li>Bayar putus. Tak ada kewajiban untuk melanjutkan langganan. Tak ada tagihan rahasia.</li>
        </ul>
        <center><input type="submit" class="btn btn-info button" id="beli" value="Daftar Sekarang"></center>
        </form>
    </div>
    
        <div class="kartu biru mt-5">
            <h5>Belum siap Berlangganan?</h5>
            <p>Coba Gratis 15 hari</p>

            <ul>
                <li>Akses penuh ke seluruh kelas di Rumah Guru.</li>
                <li>1x (satu kali) kirim submission. Dapatkan bimbingan dan bedah soal (code review) dari para pengajar.</li>
                <li>Sertifikat kelulusan jika Anda berhasil menyelesaikan kelas berikut submission proyek akhir dengan baik.</li>
                <li>Konsultasi sepuasnya di forum diskusi.</li>
                <li>Trial hanya berlaku 1x (satu kali) per orang/akun. Gunakan kesempatan ini sebaik-baiknya.</li>
            </ul>
            <center><a href="/subscriptions/trial" class="btn btn-info button" onclick="return confirm('Apakah Anda yakin ingin mendaftar trial gratis selama 15 hari ? Pendaftaran trial hanya dapat dilakukan sekali, selanjutnya Anda tidak akan dapat mendaftar trial kembali.')">Coba Sekarang</a></center>
        </div>
    </div>
</div>



<?= $this->endSection()   ; ?>