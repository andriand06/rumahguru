<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Guru</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css');?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/all.css');?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="<?= base_url('/assets/img/testes.png');?>" alt="Rumah Guru" width="180" height="52"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Academy
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
   
    
    
       
          <a href="/auth/login" class="btn btn-secondary" id="auth">Masuk</a>
          <a href="/auth/registrasi" class="btn btn-primary" id="auth">Daftar</a>
       


     
      
      
    </div>
  </div>
</nav>

    

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






<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js');?>"></script>
<script>
    var toggleNode = document.getElementById("togglepassword");
    var passwordNode = document.getElementById("password");
    function toggle()
    {
        if(passwordNode.type === "password"){
            passwordNode.type = "text";
        }
        else if(passwordNode.type === "text") {
            passwordNode.type = "password";
        }
    }
    toggleNode.addEventListener('click',toggle)
</script>

</body>
</html>