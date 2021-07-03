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
          <a class="nav-link active" aria-current="page" href="/dashboard/" id="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/academy/my">Academy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/challenge/index">Challenge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/event/">Event</a>
        </li>
        
      </ul>
      
   
      <?php if ($username) : ?>   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <img src="<?= base_url('/assets/img/pp.jpg') ; ?>" alt="" class="nav-link dropdown-toggle roundedimg" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">K</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
          </ul>
          </li>
          <a href="/dashboard/index" class="btn btn-info button" id="home">Dashboard</a>
        <?php endif ;?>
        
        </ul>
        <?php if(!$username) : ?>
          <a href="/auth/login" class="btn btn-secondary" id="auth">Masuk</a>
          <a href="/auth/registrasi" class="btn btn-primary" id="auth">Daftar</a>
          <?php endif ; ?>
       
        
       

        


     
      
      
    </div>
  </div>
</nav>


