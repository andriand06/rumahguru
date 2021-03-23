<?= $this->extend('wrapper/wrapper')   ; ?>
<?= $this->section('content')   ; ?>
    <div class="container mt-5">
    
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h5>Halaman Login</h5>
            <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan')   ; ?>
            </div>
            <?php endif ;?>
            <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('error')   ; ?>
            </div>
            <?php endif;?>
                <form action="/login/index" method="post">
                    <div class="form-group">
                        
                        <input type="text" name="username" id="login"  class="form-control <?//= ($val->hasError('username')) ? 'is-invalid' : ''; ?>" placeholder="Username" value="">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('username')   ; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="password" id="login" class="form-control <?//= ($val->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="Password">
                        <div class="invalid-feedback" style="color: red;">
                            <?//= $val->getError('password')   ; ?>
                        </div>
                    </div>
                    
                    <input type="submit" value="Sign in" class="btn btn-primary">
                </form>

                <div class="row">
                    <div class="col-md-8">
                        <p><label for="">New Around Here?</label><a href="<?= base_url('login/registrasi');?>">Sign Up</a></p>
                        <p><label for="">Forgot your password?</label><a href="<?= base_url('login/registrasi');?>">Click here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?= $this->endSection()   ; ?>





