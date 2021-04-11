<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>




    <div class="content-wrapper">

       <?php if(session()->getFlashdata('pesan')) : ?>
       <div class="alert-success">
        <?= session()->getFlashdata('pesan')   ; ?>
       </div>
       <?php endif  ;?>
    
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
                            <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden">
                            <button type="submit" class="btn btn-info">Kirim Ulang Email Verifikasi</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
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
                                    <a href="" class="btn mt-3
                                        btn-primary">Daftar Trial</a>
                                </p>
                            </div>
                        </div>
                    </div>
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
                                        <td>	Daftar dan mulailah belajar pada kelas premium.

</td>
                                    </tr>
                                </table>
                                <p class="mb-0">
                                    <a href="" class="btn mt-3
                                        btn-primary">Daftar Kelas Premium</a>
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
                                        <td>	Submit tugas Anda dan dapatkan code review dari expert.

</td>
                                    </tr>
                                </table>
                                <p class="mb-0">
                                    <a href="" class="btn mt-3
                                        btn-primary">Submit Tugas</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
           </div>
       </div>
    </div>






<?= $this->endSection()   ; ?>