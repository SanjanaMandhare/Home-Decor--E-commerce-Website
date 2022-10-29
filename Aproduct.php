<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Shoponline </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
  crossorigin="anonymous"/>

<link rel="stylesheet" href="style.css">
</head>
<body >

    <!--NAVIGATION-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top ">
        <div class="container">
          <img src="img/logo/logo1.png" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>

              <li class="nav-item">
               <li class="nav-item">
                <i class="fal fa-search"></i>
                <i class="fal fa-shopping-bag"></i>
              </li>
              </li>

              <section class="datetime" id="datetime" class="container">
                <div class=" py-1">
                  
                  <div>
                    <section class="datetime" id="mysection">
                         <article id="premierart">
                             <h3 id="gotime">00:00:00</h3>
                         </article>
                         <article id="towart">
                             <h4 id="getdate">00|00|2020</h4>
                         </article>
               
                    </section>
               </div>
               <script>
               function updateTime(){
                   var date = new Date();
                   var goTime = document.getElementById("gotime");
                   goTime.innerHTML = date.toLocaleTimeString();
                   var setDate = document.getElementById("getdate");
                   setDate.innerHTML = date.getDate() + "-" + parseInt(date.getMonth()+1) + "-" + date.getFullYear();
                
                    var gTime = document.getElementById(gtime);
                 gTime.innerHTML = date.setUDCHours() + date.setUTCMinutes() + date.setUTCSeconds();
                   
               }
               setInterval(updateTime,100);
               onload = updateTime();
               
               </script>
        
                </div>
              </section>
              
          </div>
        </div>
      </nav>



<section>
    <div>
      <h1>
       <?php
       $product =array("Furniture","Home Deco","Gifting"); 
       echo "Products Avaliable are " . $Furniture[0] . ", " . $Home Deco[1] . " and " . $Gifting[2] . ".";
       ?>
   </h1>
    </div>
  </section>

  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <img src="img/logo/logo1.png" alt="">
        <p> We don't sell furniture, we sell feelings! Good things come in small packages !! </p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase list-unstyled">
          <li><a href="#">homedecor</a></li>
          <li><a href="#">Furniture</a></li>
          <li><a href="#">Gifting</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address</h6>
          <p>123 DREAMLAND STREET , NEW MUMBAI, MUMBAI  </p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p>(123) 456-7890 </p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p>MAIL@EXAMPLE.COM </p>
        </div>
      </div>

      <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img class ="img-fluid w-25 h-100 m-2" src="img/background/bg9.jpg" alt="">
          <img class ="img-fluid w-25 h-100 m-2" src="img/background/bg9.jpg" alt="">
          <img class ="img-fluid w-25 h-100 m-2" src="img/background/bg9.jpg" alt="">
          <img class ="img-fluid w-25 h-100 m-2" src="img/background/bg9.jpg" alt="">
          <img class ="img-fluid w-25 h-100 m-2" src="img/background/bg9.jpg" alt="">
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
 integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
crossorigin="anonymous"></script>


<body>
</html>