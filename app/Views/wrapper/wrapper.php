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

<?= $this->include('wrapper/navbar')   ; ?>

<?= $this->renderSection('content')   ; ?>
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
    
    var beli = document.getElementById("beli");
   
  
    function data() {
        var langganan = document.getElementById("langganan");
        
        var langgananPrice = langganan.dataset.price;
     
    
        document.getElementById("price").innerHTML = langgananPrice;
    };
   

 


  
</script>

</body>
</html>