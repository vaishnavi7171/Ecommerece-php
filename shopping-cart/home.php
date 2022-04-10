<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce website </title>
    <link rel="stylesheet" type="text/css" href="Ecomphp.css ">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    <div class="container"> 
    <nav class="navbar navbar-expand-md  ">
    <a class="navbar-brand" href="index.php"><img src="image/BH.png" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto nav-ul">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item nav-li">
          <a class="nav-link active " href="index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login-user.php"></i>Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span>Cart</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="owl-carousel owl-theme">
    <div class="item"><img src="image/Bhomm.png"></div>
    <div class="item"><img src="image/Bhomm1.png"></div>
    <div class="item"><img src="image/Bhomm2.png"></div>
    <div class="item"><img src="image/Bhomm.png"></div>
    <div class="item"><img src="image/Bhomm1.png"></div>
    <div class="item"><img src="image/Bhomm2.png"></div>
    <div class="item"><img src="image/Bhomm.png"></div>
    
</div>
<!-- Categories -->
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
         <img src="image/s2.jpg">      
        </div>
        <div class="col-3">
         <img src="image/s1.jpg">      
        </div>
        <div class="col-3">
         <img src="image/s3.jpg">      
        </div>
    </div>
</div>
</div>
<!-- products -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="image/uspolo.png">
            </div>
            <div class="col-5">
                <img src="image/levis.png">
            </div>
            <div class="col-5">
                <img src="image/Godrej.png">
            </div>
            <div class="col-5">
                <img src="image/uspolo.png">
            </div>
        </div>
    </div>
</div>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="data:image/jpeg;base64,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">
            <h4>Bags</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="data:image/jpeg;base64,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">
            <h4>lehenga</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToXP2NS-lAmffzDu-Ufwwr_KIoOdV9_6NH5w&usqp=CAU">
            <h4>Shoes</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="image/d1.jpg" onclick="window.location.href='D:/Sublime Text 3 (3211)/Ecomdetail.html'">
            <h4>One piece</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="image/d2.jpg">
            <h4>Jeans</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="image/d3.jpg">
            <h4>Hoodie</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="image/d4.jpg">
            <h4>Dongri</h4>
            <div class="star">
               <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="image/d5.jpg">
            <h4>Kurta</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        <div class="col-4">
            <img src="image/d6.jpg">
            <h4>Anarkhali</h4>
            <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <p>500.00</p>
        </div>
        
    </div>

</div>
<!-- offer categoires -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="image/o1.jpeg" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Avaiable </p>
                <h1>Lorem ipsum</h1>
                <small>We Have Qualityproducts At Affordable Prices,Superior Quality, Over 20 Years Of Experience,long lasting ,easy exchange and returns</small>
                
            </div>
        </div>
    </div>
</div>
<!-- testiomonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>E-Commerce is  one of the best buying online product services among  all over the country, purchased many  items in special offers.</p>
                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="image/t1.jpg">
            <h3>Rebecca</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>This has got some huge list of best-selling and best rated products. All original and latest products.,best online store  with great customer support.</p>

                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="image/t2.jpg">
            <h3>Melisa</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Best store, Awsome customer support, Fast delivery, Thanks E-Commerce for making my shopping experience grateful. You always make me happy.</p>
                <div class="star">
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star"></i>
                <i class="fa  fa-star-o"></i>
            </div>
            <img src="image/t3.jpg">
            <h3>Lucy</h3>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h2>Download Ou app</h2>
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
            </div>
            <div class="footer-col-1">
                <img src="image/Bh.png">
                <p>placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups</p>
            </div>
            <div class="footer-col-2">
                <h2>Useful links</h2>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affilicate</li>
                </ul>
            </div>
            <div class="footer-col-3">
                <h2>Follow us</h2>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Telegram</li>
                </ul>
            </div>
        </div>
    </div>
</div>
  <script>
    
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:14,
    autoplay:true,
    autoplayTimeout:4000,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
})
  </script>
  <script src="https://kit.fontawesome.com/e4780a578d.js" crossorigin="anonymous"></script>
</body>
</html>