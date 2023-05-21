<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSPM's Myntra</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css>
</head>
<body>
  <section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#product1">Shop</a></li>
        <li><a href="#sm-banner">About</a></li>
        <li><a href="feedbackform.html">Feedback Form</a></li>
        <li><a href="contact.html">Contact</a></li>
        <!-- <li><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li> -->
      </ul>
    </div>
  </section>
  <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save  more with coupens & up to 70% off! </p>
    <button>Shop Now</button>
  </section>
  <section class="section-p1" id="feature">
    <div class="fe-box">
      <img src="img/features/f1.png" alt="">
      <h6>Free Shipping</h6>
    </div>
    <div class="fe-box">
      <img src="img/features/f2.png" alt="">
      <h6>Online Order</h6>
    </div>
    <div class="fe-box">
      <img src="img/features/f3.png" alt="">
      <h6>Save Money</h6>
    </div>
    <div class="fe-box">
      <img src="img/features/f4.png" alt="">
      <h6>Promotions</h6>
    </div>
    <div class="fe-box">
      <img src="img/features/f5.png" alt="">
      <h6>Happy Sales</h6>
    </div>
    <div class="fe-box">
      <img src="img/features/f6.png" alt="">
      <h6>F24/7 Support</h6>
    </div>
  </section>
  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Mordern Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="img/products/f1.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Hawaii Shirt</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$199</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="img/products/f2.jpg" alt="">
        <div class="des">
          <span>Louis Philippe</span>
          <h5>Cargo Printed Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$125</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="img/products/f3.jpg" alt="">
        <div class="des">
          <span>H&M</span>
          <h5>Mix Printed Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$179</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/f4.jpg" alt="">
        <div class="des">
          <span>Peter England</span>
          <h5>Flower Petal Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$125</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/f5.jpg" alt="">
        <div class="des">
          <span>Indian Terrain</span>
          <h5>Free Style Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$189</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/f6.jpg" alt="">
        <div class="des">
          <span>John Players</span>
          <h5>2 in 1 Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$225</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/f7.jpg" alt="">
        <div class="des">
          <span>Raymond</span>
          <h5>Formal Trousers</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$279</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/f8.jpg" alt="">
        <div class="des">
          <span>Blackberrys</span>
          <h5>Free Style Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$149</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>
    </div>
  </section>
  <section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off </span> -All Shirts & Trowsers</h2>
    <button class="normal">Explore More</button>
  </section>
  <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Mordern Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="img/products/n1.jpg" alt="">
        <div class="des">
          <span>Indian Terrain</span>
          <h5>Plain Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$299</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="img/products/n2.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Cargo Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$175</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>



      <div class="pro">
        <img src="img/products/n3.jpg" alt="">
        <div class="des">
          <span>Louis Philippe</span>
          <h5>White Plain Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$179</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/n4.jpg" alt="">
        <div class="des">
          <span>Flying Machine</span>
          <h5>Printed Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$195</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/n5.jpg" alt="">
        <div class="des">
          <span>Peter England</span>
          <h5>Denim Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$229</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/n6.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Half Pant</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$275</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/n7.jpg" alt="">
        <div class="des">
          <span>Allen Solly</span>
          <h5>Formal Trousers</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>$199</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>


      <div class="pro">
        <img src="img/products/n8.jpg" alt="">
        <div class="des">
          <span>H&M</span>
          <h5>Plain Black Shirts</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <h4>$199</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>
    </div>
  </section>
  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>crazy deals</h4>
      <h2>Buy 1 get 1 free</h2>
      <span>The best classic dress is on sale at Harshal's Store</span>
      <button class="white">Learn More</button> 
    </div>
    <div class="banner-box banner-box2">
      <h4>spring/summer</h4>
      <h2> The upcomming season</h2>
      <span>The best classic dress is on sale at Harshal's Store</span>
      <button class="white">Collection</button> 
    </div>
  </section>
  <section id="banner3">
    <div class="banner-box">
      <h2>SEASONAL SALES</h2>
      <h3>Winter Collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box3">
      <h2>NEW FOOTWEAR COLLECTION</h2>
      <h3>spring/summer 2022</h3>
    </div>
    <div class="banner-box4 banner-box">
      <h2>T-SHIRTS</h2>
      <h3>New Trendy Prints</h3>
    </div>
  </section>
  
</body>
</html>