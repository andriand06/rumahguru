<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
<div class="jumbo">
    <h3>Selamat Datang di Rumah Guru</h3>
    <p>Tentukan minat belajar dan temukan kelas yang tepat untuk Anda pelajari. </p>
    <div class="row">
        <div class="col-md-8">
            <form action="/onboarding/interest" method="post">
            <?= csrf_field(); ?>
            <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan') ; ?>
            </div>
            <?php endif;?>
            <input type="hidden" name="interest" value="<?= $check;?>">
            <h5>Minat Belajar</h5>
            <p>Anda bisa memilih lebih dari 1(satu) minat.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="interest mb-4 <?= ($val->hasError('interest')) ? 'is-invalid' : '' ;?>" id="divInterest">
                        <div class="row mt">
                            <div class="col-md-4 mt-2">
                                
                                    <input type="checkbox" name="interest[]" value="Komputer" id="checkinterest" > 
                                    <label for=""  id="labelinterest" >Komputer</label>
                                    
                              
                            </div>
                            <div class="col-md-4 mt-2">
                                
                                    <input type="checkbox" name="interest[]" value="Matematika" id="checkinterest" > 
                                    <label for="" id="labelinterest" >Matematika</label>
                                
                            </div>
                            <div class="col-md-4 mt-2">
                              
                                    <input type="checkbox" name="interest[]" value="<?= $username;?>" id="checkinterest"> 
                                    <label for="" id="labelinterest"><?= $username   ; ?></label>
                                
                            </div>
                          
                        </div>

                       <div class="row mt-2">
                            <div class="col-md-4 mt-2">
                                
                                <input type="checkbox" value="Andrian" name="interest[]" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                            <div class="col-md-4 mt-2">
                                
                                <input type="checkbox" value="Andrian" name="interest[]" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                            <div class="col-md-4 mt-2 mb-2">
                                
                                <input type="checkbox" value="Andrian" name="interest[]" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                       </div>
                    </div>
                    <div class="invalid-feedback" style="color: red;">
                            <?= $val->getError('interest')   ; ?>
                </div>
            </div>
            <div class="form-group mb-4">
                        <label for="phone" class="font-weight-bold">No. Telepon</label>
                        <div class="input-group">
                            <div class="input-group">
                                <span class="input-group-text">🇮🇩 +62</span>
                            </div>
                            <input class="form-control <?= ($val->hasError('phone')) ? 'is-invalid' : '' ;?>"  name="phone" type="tel" id="phone" pattern="([8][0-9]+)">
                            <div class="invalid-feedback" style="color: red;">
                            <?= $val->getError('phone')   ; ?>
                        </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="custom-control custom-checkbox">
                            <input id="opt_in_phone" class="custom-control-input" checked="checked" name="opt_in_phone" type="checkbox" value="1">
                            <label for="opt_in_phone" class="custom-control-label font-weight-medium">Saya tertarik untuk mendapatkan informasi melalui no. telepon ini.</label>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/dashboard/" class="btn btn-secondary">Lewati</a>
                    </div>
            </form>
        </div>

        <div class="col-md-4">
            <img src="<?= base_url('/assets/img/png/teaching.png');?>" alt="Teaching" id="teachingimg">
        </div>
    </div>
    
</div>

<script>
    var inputNode = document.querySelectorAll("input");
    var checkboxNode = document.getElementById("checkinterest");
    var labelNode = document.getElementById("labelinterest")
    function pilih(labelNode)
    {
        
        labelNode.target.style.backgroundColor =  "red";
    }
    inputNode.addEventListener('click',pilih);
</script>
<?= $this->endSection()   ; ?>