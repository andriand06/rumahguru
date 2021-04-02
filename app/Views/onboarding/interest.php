<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
<div class="jumbo">
    <h3>Selamat Datang di Rumah Guru</h3>
    <p>Tentukan minat belajar dan temukan kelas yang tepat untuk Anda pelajari. </p>
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
            <h5>Minat Belajar</h5>
            <p>Anda bisa memilih lebih dari 1(satu) minat.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="interest mb-4" id="divInterest">
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                
                                    <input type="checkbox" value="1" id="checkinterest" > 
                                    <label for=""  id="labelinterest" >Andrian</label>
                                    
                              
                            </div>
                            <div class="col-md-4 mt-2">
                                
                                    <input type="checkbox" value="2" id="checkinterest"> 
                                    <label for="" id="labelinterest" >Andrian</label>
                                
                            </div>
                            <div class="col-md-4 mt-2">
                              
                                    <input type="checkbox" value="3" id="checkinterest"> 
                                    <label for="" id="labelinterest">Andrian</label>
                                
                            </div>
                          
                        </div>

                       <div class="row">
                            <div class="col-md-4 mt-2">
                                
                                <input type="checkbox" value="3" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                            <div class="col-md-4 mt-2">
                                
                                <input type="checkbox" value="3" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                            <div class="col-md-4 mt-2 mb-2">
                                
                                <input type="checkbox" value="3" id="checkinterest"> 
                                <label for="" id="labelinterest">Andrian</label>
                            
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                        <label for="phone" class="font-weight-bold">No. Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">🇮🇩 +62</span>
                            </div>
                            <input class="form-control" pattern="([8][0-9]+)" name="phone" type="tel" id="phone">
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
                        <a href="" class="btn btn-secondary">Lewati</a>
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