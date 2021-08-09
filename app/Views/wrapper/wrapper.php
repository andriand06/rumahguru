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
<footer>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div>
                    Learn to be the best with the best Tutor Academy Here!
                    <img src="/assets/img/testes.png" alt="">
                </div>
            </div>
            <div class="col-4">
                <h6 class="font-weight-bold">Follow us for more information.</h6>
                <ul class="nonelist">
                    <li><span><img class="img-wrapper" src="/assets/img/logofn.png" alt="Facebook"></span>Rumah Guru</li>
                    <li><span><img class="img-wrapper" src="/assets/img/logoig.png" alt="Instagram"></span>Rumah Guru</li>
                    
                </ul>
            </div>
            <div class="col-4">
                <h6 class="font-weight-bold">Contact Us</h6>
                <ul class="nonelist">
                    <li>RumahGuru@gmail.com</li>
                    <li>021 - 2208 - 1123</li>
                    <li>RumahGuru, Jambi, Indonesia</li>

                    
                </ul>
            </div>
        </div>
    </div>
  <p>&copy;Copyright Rumah Guru 2021</p>
</footer>


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
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    
    function Cari(){
        const cariValue = document.getElementById("cari").value;
        const col = document.getElementsByClassName("col-md-3");
        
        const filter = cariValue.toLowerCase();
        
       console.log(col)
       for(let l=0;l < col.length;l++){
        const card = col[l].getElementsByClassName("card");
       
        for(let i=0;i< card.length;i++){
            const cardBody = card[i].getElementsByClassName("card-body");
            console.log(cardBody)
            for(let j=0;j< cardBody.length;j++){
                const cardTitle = cardBody[j].getElementsByClassName("card-title");
                    console.log(cardTitle)
                for(let k=0; k < cardTitle.length;k++) {
                    let a = cardTitle[k].querySelector("#title");
                    let text = a.innerText;
                    console.log(a)
                if (text.toLowerCase().indexOf(filter) > -1) {
                    col[l].style.display = "";  
                } else {
                    col[l].style.display = "none";
                }
                }
                
            }
       
        }
    }
}

function Navigation() {
    const dropdownMenu = document.getElementsByClassName("dropdown-menu");
    if(dropdownMenu.style.display == "none") {
        dropdownMenu.style.display == "";
        dropdownMenu.style.height = "550px";
    }
    else {
        dropdownMenu.style.display == "none";
        dropdownMenu.style.height = "0px";
    }
}
    
  


  
</script>

</body>
</html>