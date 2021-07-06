<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
    
        <h1 class="mt-5" style="margin-left:60px;">Progres Profil </h1>
    
    <div class="kartu putih">
        <div class="row">
            <div class="col-md-12">
                
                    <h5>Progres Profil Anda</h5>
                    <label for="">Dengan melengkapi profil, Anda dapat menikmati layanan Dicoding dengan maksimal.</label>
                    <p><b>Contoh: Melihat sertifikat kelulusan Academy.</b></p>
                    
                    
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                <form action="/profile/save" method="post">
                <?= csrf_field()   ; ?>
                <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan') ; ?>
            </div>
            <?php endif;?>
                        <b>Data Diri</b>
                        <div class="mb-3">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" id="namalengkap" name="namalengkap" class="form-control <?= ($val->hasError('namalengkap')) ? 'is-invalid' : '' ;?>" value="<?= $isi['namalengkap'];?>">
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('namalengkap')   ; ?>
                            </div>
                        
                        </div> 
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" value="<?= $username;?>" class="form-control <?= ($val->hasError('username')) ? 'is-invalid' : '' ;?>">
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('username')   ; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            
                            <label for="notelp" class="form-label">No Telepon</label>
                            <div class="input-group">
                                
                                <span class="input-group-text" style="height:45px; ">🇮🇩 +62</span>
                                <input type="tel" name="notelp" id="notelp" pattern="([8][0-9]+)" class="form-control <?= ($val->hasError('notelp')) ? 'is-invalid' : '' ;?>"value="<?= (isset($notelp)) ? $notelp : '' ;?>">
                                <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('notelp')   ; ?>
                            </div>
                            </div>
                           
                        </div>
                        <b>Kota & Kabupaten</b>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota / Kabupaten saat ini</label>
                            
                            <select name="kota" id="kota" style="display: block;" class="form-select <?= ($val->hasError('kota')) ? 'is-invalid' : '' ;?>">
                                <option value="" disabled selected>Pilih Kota Anda</option>
                                <?php foreach ($kota1 as $i) : ?>
                                <option name="kota" value="<?= $i['kota'].'-'.$i['provinsi']   ; ?>"><?= $i['kota'].'-'.$i['provinsi']   ; ?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('kota')   ; ?>
                            </div>
                            
                        </div> 
                      
                        <div class="row mb-3">
                            <label for="ttl"  class="form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-md-8 mt-2">
                            
                                <select id="kota" name="kotattl" class="form-select <?= ($val->hasError('kota')) ? 'is-invalid' : '' ;?>">
                                <option value="" disabled selected>Pilih Kota Anda</option>
                                <?php foreach ($kota1 as $i) :?>
                                    <option value="<?= $i['kota'].'-'.$i['provinsi'];?>"><?= $i['kota'].'-'.$i['provinsi'];?></option>
                                <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('kotattl')   ; ?>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control <?= ($val->hasError('tanggallahir')) ? 'is-invalid' : '' ;?>" name="tanggallahir">
                                <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('tanggallahir')   ; ?>
                            </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                            <select id="pendidikan" name="pendidikan" style="display: block;" class="form-select <?=($val->hasError('pendidikan')) ? 'is-invalid' : '' ;?>">
                                <option value="belum memilih" disabled selected>Belum Memilih</option>
                                <option value="belum sekolah" >Tidak / Belum Sekolah</option>
                                <option value="tidak tamat sd" >Tidak Tamat SD / Sederajat</option>
                                <option value="tamat sd" > Tamat SD / Sederajat</option>
                                <option value="sma" > SMA </option>
                                <option value="smk" > SMK </option>
                                <option value="diploma1-3" > DiplomaI-III </option>
                                <option value="strata1" > DiplomaIV / Strata 1 </option>
                                <option value="strata2" > Strata 2 </option>
                                <option value="strata3" > Strata 3 </option>
                            </select>
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('pendidikan')   ; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="perusahaan" class="form-label">Perusahaan / Institusi saat ini</label>
                            <input type="text" id="perusahaan" name="perusahaan" class="form-control <?=($val->hasError('perusahaan')) ? 'is-invalid' : '' ;?>" value="<?= (isset($perusahaan)) ? $perusahaan : '' ;?>">
                            <div id="perusahaanHelp" class="form-text">Anda bisa menuliskan nama perusahaan atau kampus.</div>
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('perusahaan')   ; ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label" >Pekerjaan / Profesi saat ini</label>
                            <select id="pekerjaan" name="pekerjaan" class="form-select <?=($val->hasError('pekerjaan')) ? 'is-invalid' : '';?>">
                                <option value="" disabled selected>Pilih Pekerjaan Anda</option>
                                
                                <?php foreach($pekerjaan1 as $p) :?>
                                <option  value="<?= $p['pekerjaan'];?>"><?= $p['pekerjaan']   ; ?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="invalid-feedback" style="color:red">
                                <?= $val->getError('pekerjaan')   ; ?>
                            </div>
                            <div id="pekerjaanHelp" class="form-text">Anda bisa menuliskan nama perusahaan atau kampus.</div>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="" class="btn btn-secondary">Batal</a>
                        </div>

                </form>
                </div>
            </div>
            <div class="col-md-6"></div>
    </div>
    </div>
    


<?= $this->endSection()   ; ?>