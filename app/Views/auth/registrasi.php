<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>

    <div class="container mt-5">
        

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <img src="<?= base_url('/assets/img/testes.png');?>" alt="">
            <h5>Daftar Akun Baru </h5>
            <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan')   ; ?>
            </div>
            <?php endif ;?>
                <form action="" method="post">
                <?= csrf_field()   ; ?>
                    <div class="form-group">
                        
                        <input type="text" name="username"  class="form-control" placeholder="Username" autocomplete="off">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('username')   ; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('password')   ; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="ulangipassword" class="form-control" placeholder="UlangiPassword" autocomplete="off">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('ulangipassword')   ; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('email')   ; ?>
                        </div>
                    </div>
                    
                    <input type="submit" value="Sign up" class="btn btn-primary">
                </form>

                <div class="row">
                    <div class="col-md-8">
                        <p><label for="">Already Have Account?</label><a href="<?= base_url('/auth/login');?>">Sign in</a></p>
                        <p><label for="">Forgot your password?</label><a href="<?= base_url('/auth/registrasi');?>">Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>









<?= $this->endSection()   ; ?>