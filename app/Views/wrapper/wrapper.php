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
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/bootstrap/sbadmin/vendor/fontawesome-free/css/all.min.css');?>" >
    <link  rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
       >

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('/bootstrap/sbadmin/css/sb-admin-2.min.css');?>">
</head>

<?= $this->include('wrapper/navbar')   ; ?>

<?= $this->renderSection('content')   ; ?>
<script src="<?= base_url('/assets/js/bootstrap.bundle.min.js');?>"></script>
 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('/bootstrap/sbadmin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/bootstrap/sbadmin/js/sb-admin-2.min.js');?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('/bootstrap/sbadmin/vendor/chart.js/Chart.min.js');?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('/bootstrap/sbadmin/js/demo/chart-area-demo.js');?>"></script>
    <script src="<?= base_url('/bootstrap/sbadmin/js/demo/chart-pie-demo.js');?>"></script>
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
    
    var beli = document.getElementById("beli");
   
  
    function data() {
        var langganan = document.getElementById("langganan");
        
        var langgananPrice = langganan.dataset.price;
     
    
        document.getElementById("price").innerHTML = langgananPrice;
    };
   
   
    var navLink = document.getElementsByClassName("nav-link");
    for (var i = 0;i < navLink.length;i++)
    {
       navLink[i].addEventListener("click",function(){
       
       var current = document.getElementsByClassName("active");
       current[0].className = current[0].className.replace(" active", " ");
       navLink[i].className += " active";

   })

    }
    
            
  


  
</script>

</body>
</html>