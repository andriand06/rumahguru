<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>




    <div class="content-wrapper">
        <div class="container mt-3">
       <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert-success">
        <?= session()->getFlashdata('pesan')   ; ?>
            </div>
       <?php endif  ;?>
        </div>
        <?php if($isactive === 0) : ?>
        <div class="row">
            <div class="col-md-12">
                <div class="kartu biru">
                
                    <h2>Selamat Bergabung <?= $username;?></h2>
                    <div class="mt-3">
                            <p>
                                Untuk dapat akses ke semua fitur Rumah Guru, silahkan verifikasi akun Anda.
                                <br class="d-lg-block d-md-block d-none">
                                Cek email dan klik verifikasi.
                            </p>
                            <form method="POST" action="/dashboard/sendEmail" accept-charset="UTF-8"><input name="_token" type="hidden">
                            <button type="submit" class="btn btn-info">Kirim Ulang Email Verifikasi</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if($isactive === 1) :?>
        <div class="container"></div>
        <?php endif;?>
        <div class="row">
            <div class="col-md-12">
                <div class="kartu putih">
                    <h5>Progres Profil Anda</h5>
                    <label for="">Dengan melengkapi profil, Anda dapat menikmati layanan Dicoding dengan maksimal.</label>
                    <p><b>Contoh: Melihat sertifikat kelulusan Academy.</b></p>
                    <a href="" class="btn btn-light mt-3" style="display: block; width: 200px; height:40px">Lengkapi Sekarang</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Academy Dashboard</h3>
                </div>
            </div>
       </div>

       <div class="row">
           <div class="col-md-12">
               <div class="kartu putih">
                    <h5>Milestone Belajar Anda</h5>
                    <div class="mt-3"></div>
                    <?php if($trial == null or !$trial) : ?>
                    <div class="card card-outline-success">
                        <div class="card-body p-5">
                            <div class="d-flex" style="justify-content: space-between;">
                                <table>
                                    <tr>
                                        <td><h4 class="mr-2">1.</h4></td>
                                        <td>
                                            <h4>Daftar Trial
                                                                                                <i class="lock-icon ml-2"></i>
                                                                                        </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Coba gratis 15 hari dan akses semua kelas.</td>
                                    </tr>
                                </table>
                                <p class="mb-0">
                                <a href="/subscriptions/trial" class="btn btn-info button" onclick="return confirm('Apakah Anda yakin ingin mendaftar trial gratis selama 15 hari ? Pendaftaran trial hanya dapat dilakukan sekali, selanjutnya Anda tidak akan dapat mendaftar trial kembali.')">Daftar Trial</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php if($trial === 1): ?>
                    <div class="card trial">
                        <div class="card-body p-5">
                            <div class="d-flex" style="justify-content: space-between;">
                                <table>
                                    <tr>
                                        <td><h4 class="mr-2">1.</h4></td>
                                        <td>
                                            <h4>Daftar Trial
                                                                                                <i class="lock-icon ml-2"></i>
                                                                                        </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Coba gratis 15 hari dan akses semua kelas.</td>
                                    </tr>
                                </table>
                                <p class="mb-0">
                                <a href="/subscriptions/trial" class="btn btn-info button disabled" onclick="return confirm('Apakah Anda yakin ingin mendaftar trial gratis selama 15 hari ? Pendaftaran trial hanya dapat dilakukan sekali, selanjutnya Anda tidak akan dapat mendaftar trial kembali.')" >Daftar Trial</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="card card-outline-success mt-5">
                        <div class="card-body p-5">
                            <div class="d-flex" style="justify-content: space-between;">
                                <table>
                                    <tr>
                                        <td><h4 class="mr-2">2.</h4></td>
                                        <td>
                                            <h4>Daftar Kelas Premium
                                                                                                <i class="lock-icon ml-2"></i>
                                                                                        </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>	Daftar dan mulailah belajar pada kelas premium.</td>
                                    </tr>
                                </table>
                                
                                <p class="mb-0">
                                <?php if($isactive === 0): ?>
                                    <a href="" class="btn mt-3
                                        btn-info button disabled" >Daftar Kelas Premium</a>
                                <?php endif;?>
                                <?php if($isactive === 1): ?>
                                    <a href="/academy/list" class="btn mt-3
                                        btn-info button">Daftar Kelas Premium</a>
                                <?php endif;?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-outline-success mt-5">
                        <div class="card-body p-5">
                            <div class="d-flex" style="justify-content: space-between;">
                                <table>
                                    <tr>
                                        <td><h4 class="mr-2">3.</h4></td>
                                        <td>
                                            <h4>Kirim Submission
                                                                                                <i class="lock-icon ml-2"></i>
                                                                                        </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>	Submit tugas Anda dan dapatkan code review dari expert.</td>
                                    </tr>
                                </table>
                                <p class="mb-0">
                                    <a href="" class="btn mt-3
                                        btn-info button disabled">Submit Tugas</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="kartu putih">
            <div class="row">   
                <h3>Rekomendasi Academy</h3>
                <p>Berikut adalah rekomendasi kelas sesuai dengan minat belajar Anda. Pelajari sekarang juga.</p>
                <div class="col-md-3 mt-3">
                    
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                            <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                            <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 mt-3">
                    
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                            <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        </div>
                    </div>  
                </div>
                <div class="col-md-3 mt-3">
                    
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?= base_url('/assets/img/png/math.png');?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Belajar Matematika</a></h5>
                            <p class="card-text">Pelajari Matematika dengan kurikulum terlengkap.</p></p>
                        </div>
                             
                    </div>
                    <a href="/academy/list" class="btn btn-info mt-3 button">Lihat Semua Kelas</a>   
                </div>
                
            </div>
        </div>  
           
    </div>






<?= $this->endSection()   ; ?>