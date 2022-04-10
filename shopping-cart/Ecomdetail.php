
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ecommerce product website </title>
	<link rel="stylesheet" type="text/css" href="Ecomphp.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
	<div class="container">	
   <div class="navbar">
   	<div class="logo">
   		<img src="image/BH.png">
   	</div>
   	<nav>
   		<ul>
   			<li><a href="Ecomphp.php">Home</a></li>
   			<li><a href="index.php">Products</a></li>
   			<li><a href="">About</a></li>
   			<li><a href="">Contact</a></li>
   			<li><a href="">Account</a></li>
   			<li><a href="cart.php">Cart</a></li>
   		</ul>
   	</nav>
    <div class="menu">
       <i class="fa fa-bars"></i> 
    </div>
   </div>
</div>

<!-- single product details -->

<div class="small-container single-product">
    <div class="pre-link">
        <a href="index.php">
    <i class="fa fa-arrow-left"></i></a>
</div>
    <div class="row">
        <div class="col-2">
           <img src="image/d1.jpg" width="100%" id="ProductImg"> 
           <div class="small-img-row">
               <div class="small-img-col">
                   <img src="image/d2.jpg" width="100%" class="small-img">
               </div>
               <div class="small-img-col">
                   <img src="image/d3.jpg" width="100%" class="small-img">
               </div>
               <div class="small-img-col">
                   <img src="image/d4.jpg" width="100%" class="small-img"> 
               </div>
               <div class="small-img-col">
                   <img src="image/d5.jpg" width="100%" class="small-img">
               </div>
           </div>
        </div>
        <div class="col-2">
            <p>Home/Dress</p>
            <h1>One piece dress for women</h1>
            <h4>₹994</h4>
            <h3>Product Details</h3>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
            </p>
        </div>
    </div>
</div>



<div class="small-container">
    
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="image/d9.jpg">
            <h4>Watch</h4>
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
            <img src="image/d10.jpg">
            <h4>Heels</h4>
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
            <img src="image/d12.jpg">
            <h4>Chain</h4>
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
    var ProductImg= document.getElementById('ProductImg');
    var SmallImg=document.getElementsByClassName('small-img');
    SmallImg[0].onclick=function(){
        ProductImg.src=SmallImg[0].src;
    }
    SmallImg[1].onclick=function(){
        ProductImg.src=SmallImg[1].src;
    }
    SmallImg[2].onclick=function(){
        ProductImg.src=SmallImg[2].src;
    }
    SmallImg[3].onclick=function(){
        ProductImg.src=SmallImg[3].src;
    }
</script>
  
  <script src="https://kit.fontawesome.com/e4780a578d.js" crossorigin="anonymous"></script>
</body>
</html>