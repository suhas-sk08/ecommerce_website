<?php
 include('includes/connect.php');
 include('functions.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SuitYourself</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/logo1.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>
<body>
   <!--
    - MODAL
  -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>SuitYourself</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>



    <header>

        <div class="header-top">
    
          <div class="container">
    
            <ul class="header-social-container">
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
            </ul>
    
            <div class="header-alert-news">
              <p>
                <b>Free Shipping</b>
                on Order Over - &#8377;1000
              </p>
            </div>
    
            <div class="header-top-actions">
    
              <select name="currency">
    
                <option value="RUpeesz">RUpees &#8377;</option>
                
    
              </select>
    
              <select name="language">
    
                <option value="en-US">English</option>
                
    
              </select>
    
            </div>
    
          </div>
    
        </div>
    
        <div class="header-main">
    
          <div class="container">
    
            <a href="index.php" class="header-logo">
              <img src="./assets/images/logo/logo.png" alt="SuitYourself logo" width="120" height="36">
            </a>
    
            <div class="header-search-container">
            <div class="header-search-container">
    <form action="search.php" method="get">
              <input type="search" name="search_data" class="search-field" placeholder="Enter your product name...">
    
              <button class="search-btn" name="search_data_product" value="Seaarch">
                <ion-icon name="search-outline" class="search_btn"></ion-icon>
              </button>
    </form>
            </div>
            </div>
              
    
            <div class="header-user-actions">
    
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
    
              <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>
                <span class="count">0</span>
              </button>
    
              <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="count">0</span>
              </button>
    
            </div>
    
          </div>
    
        </div>
    
        <nav class="desktop-navigation-menu">
    
          <div class="container">
    
            <ul class="desktop-menu-category-list">
              
    
              <li class="menu-category">
                <a href="index.php" class="menu-title">Home</a>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Categories</a>
    
                <div class="dropdown-panel">
    
                  <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Men's</a>
                    </li>
                    <?php
                    $select_category="SELECT * FROM `categories1`";
                    $result_category=mysqli_query($con,$select_category);
                    while($row_data=mysqli_fetch_assoc($result_category)){
                      $category1_title=$row_data['category1_title'];
                      $category1_id=$row_data['category1_id'];
                      echo" <li class='panel-list-item'>
                      <a href='index.php?category=$category1_id'>$category1_title</a>
                    </li> ";
                    }
                      ?>
                    
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>
    
                  <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Women's</a>
                    </li>
                    <?php
                    $select_category2="SELECT * FROM `categories2`";
                    $result_category2=mysqli_query($con,$select_category2);
                    while($row_data=mysqli_fetch_assoc($result_category2)){
                      $category2_title=$row_data['category2_title'];
                      $category2_id=$row_data['category2_id'];
                      echo" <li class='panel-list-item'>
                      <a href='index.php?brand=$category2_id'>$category2_title</a>
                    </li> ";
                    }
                      ?>
    
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>
    
                  <ul class="dropdown-panel-list">
    
                    <li class="menu-title">
                      <a href="#">Footware</a>
                    </li>
                    <?php
                    $select_category3="SELECT * FROM `categories3`";
                    $result_category3=mysqli_query($con,$select_category3);
                    while($row_data=mysqli_fetch_assoc($result_category3)){
                      $category3_title=$row_data['category3_title'];
                      $category3_id=$row_data['category3_id'];
                      echo" <li class='panel-list-item'>
                      <a href='index.php?category=$category3_id'>$category3_title</a>
                    </li> ";
                    }
                      ?>
    
                    <li class="panel-list-item">
                      <a href="#">
                        <img src="./assets/images/shoe_banner.jpg" alt="mouse collection" width="250" height="119">
                      </a>
                    </li>
    
                  </ul>
    
                </div>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Men's</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="./mens/formals_men.php">Shirt</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="./mens/casual_men.php">Shorts & Jeans</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Shoes</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#">Wallet</a>
                  </li>
    
                </ul>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Women's</a>
    
                <ul class="dropdown-list">
    
                  <li class="dropdown-item">
                    <a href="./women/casual_women.php">Dress & Frock</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="./women/casual_women.php">Jumpsuits</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="#./women/formals_women.php">Tops</a>
                  </li>
    
                  <li class="dropdown-item">
                    <a href="./women/formals_women.php"> Pants</a>
                  </li>
    
                </ul>
              </li>
    
    
              <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
              </li>
    
              <li class="menu-category">
                <a href="#" class="menu-title">Contact US </a>
              </li>
    
            </ul>
    
          </div>
    
        </nav>
    
        <div class="mobile-bottom-navigation">
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
    
            <span class="count">0</span>
          </button>
    
          <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
          </button>
    
          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
    
            <span class="count">0</span>
          </button>
    
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="grid-outline"></ion-icon>
          </button>
    
        </div>
    
        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
    
          <div class="menu-top">
            <h2 class="menu-title">Menu</h2>
    
            <button class="menu-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>
    
          <ul class="mobile-menu-category-list">
    
            <li class="menu-category">
              <a href="#" class="menu-title">Home</a>
            </li>
    
            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Men's</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="formals_men.php" class="submenu-title">Shirt</a>
                </li>
    
                <li class="submenu-category">
                  <a href="denims.php" class="submenu-title">Shorts & Jeans</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Shoes</a>
                </li>
    
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Wallet</a>
                </li>
    
              </ul>
    
            </li>
    
            <li class="menu-category">
    
              <button class="accordion-menu" data-accordion-btn>
                <p class="menu-title">Women's</p>
    
                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>
              </button>
    
              <ul class="submenu-category-list" data-accordion>
    
                <li class="submenu-category">
                  <a href="casual_women.php" class="submenu-title">Dress & Frock</a>
                </li>
    
                <li class="submenu-category">
                  <a href="casual_women.php" class="submenu-title">Jumpsuits</a>
                </li>
    
                <li class="submenu-category">
                  <a href="formals_women.php" class="submenu-title">Pants</a>
                </li>
    
                <li class="submenu-category">
                  <a href="formals_women.php" class="submenu-title"> Tops</a>
                </li>
    
              </ul>
    
            </li>
    
          
    
            <li class="menu-category">
              <a href="#" class="menu-title">Hot Offers</a>
            </li>
    
            <li class="menu-category">
              <a href="#" class="menu-title">Contact US</a>
            </li>
    
          </ul>
    
          <div class="menu-bottom">
    
            <ul class="menu-category-list">
    
              <li class="menu-category">
    
                <button class="accordion-menu" data-accordion-btn>
                  <p class="menu-title">Language</p>
    
                  <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>
    
                <ul class="submenu-category-list" data-accordion>
    
                  <li class="submenu-category">
                    <a href="#" class="submenu-title">English</a>
                  </li>
    
                 
    
              <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                  <p class="menu-title">Currency</p>
                  <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                </button>
    
                <ul class="submenu-category-list" data-accordion>
                  <li class="submenu-category">
                    <a href="#" class="submenu-title">RUpees &#8377;</a>
                  </li>
                </ul>
              </li>
    
            </ul>
    
            <ul class="menu-social-container">
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
            </ul>
    
          </div>
    
        </nav>
    
      </header>

      <main>
<!--
      - BANNER
    -->

    <div class="banner">

        <div class="container">
  
          <div class="slider-container has-scrollbar">
  
            <div class="slider-item">
  
              <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">
  
              <div class="banner-content">
  
                <p class="banner-subtitle">Trending item</p>
  
                <h2 class="banner-title">Women's latest fashion sale</h2>
  
                <p class="banner-text">
                  starting at &#8377; <b>999</b>
                </p>
  
                <a href="./women/casual_women.php" class="banner-btn">Shop now</a>
  
              </div>
  
            </div>
  
            <div class="slider-item">
  
              <img src="./assets/images/banner-2.jpg" alt="mens sale" class="banner-img">
  
              <div class="banner-content">
  
                <p class="banner-subtitle">Trending item</p>
  
                <h2 class="banner-title">men's latest fashion sale</h2>
  
                <p class="banner-text">
                  starting at &#8377; <b>899</b>
                </p>
  
                <a href="./mens/casual_men.php" class="banner-btn">Shop now</a>
  
              </div>
  
            </div>
  
            <div class="slider-item">
  
              <img src="./assets/images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">
  
              <div class="banner-content">
  
                <p class="banner-subtitle">Sale Offer</p>
  
                <h2 class="banner-title">New fashion summer sale</h2>
  
                <p class="banner-text">
                  starting at &#8377; <b>799</b>
                </p>
  
                <a href="hotoffer.php" class="banner-btn">Shop now</a>
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </div>


   

    <!--
      - CATEGORY
    -->

    
  
          <div class="category-item-container has-scrollbar">
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/fabrics.png" alt="dress & frock" width="350px">
                <h3 class="category-item-title">Luxurious Fabrics</h3>
  
                <a href="#" class="category-btn"><h3>Shop all</h3></a>
              </div>
             
  
            
  
              <div class="category-img-box">
                <img src="./assets/images/icons/sweaters.png" alt="winter wear" width="350px" >
                <h3 class="category-item-title">Winter wear</h3>
                <a href="./mens/sweaters.php" class="category-btn"><h3>Shop all</h3>
                </a>
  
            </div>
            
  
                <div class="category-img-box">
                  <img src="./assets/images/icons/occasional.png" alt="winter wear" width="350px" >
                  <h3 class="category-item-title">occasional wear</h3>
                  <a href="ethnic.php" class="category-btn"><h3>Shop all</h3></a>
    
              </div>
              
  
                <div class="category-img-box">
                  <img src="./assets/images/icons/tshirt.jpg" alt="winter wear" width="315px" >
                  <h2 class="category-item-title">Casual wear</h2>
                  <a href="./mens/casual_men.php" class="category-btn"><h3>Shop all</h3></a>
    
              </div>
              
  
               
              
            
            </div>
            
          </div>
           <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">
           
                   <img src="./assets/images/group.jpg" alt="trending" class="showcase-img"  >
                    <button class="button1-container">
                        <a href="./mens/casual_men.php" >Men's New Arrivals</a>
                   
               </button>
               <button class="button2-container">
                   <a href="./women/casual_women.php" > Women's New Arrivals</a>
              </button> 
              
          </div>
          <img src="./assets/images/styles.png" width="100%">
          
          
          <div class="category-item-container has-scrollbar">
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/products/blazer.jpg" alt="dress & frock" width="310px">
                <h3 class="category-item-title">Blue Blazzer</h3>
  
                <a href="./mens/formals_men.php" class="category-btn"><h3>&#8377;2999</h3></a>
              </div>
             
  
            
  
              <div class="category-img-box">
                <img src="./assets/images/products/red.png" alt="winter wear" width="350px" >
                <h3 class="category-item-title">Red sweaters</h3>
                <a href="./women/sweaters.php" class="category-btn"><h3>&#8377;1299</h3>
                </a>
  
              </div>
            
  
                <div class="category-img-box">
                  <img src="./assets/images/products/sleeve.png" alt="winter wear" width="350px" >
                  <h3 class="category-item-title">Long sleeve Shirt</h3>
                  <a href="./women/formals_women.php" class="category-btn"><h3>&#8377;1499</h3></a>
    
              </div>
              
  
                <div class="category-img-box">
                  <img src="./assets/images/products/torean.jpg" alt="winter wear" width="340px" >
                  <h2 class="category-item-title">Denim Jeans</h2>
                  <a href="./mens/denims.php" class="category-btn"><h3> &#8377;1499</h3></a>
    
              </div>
               </div>
            
          </div>
          <div class="product-featured">
           
            <img src="./assets/images/products/group1.jpg" alt="trending" class="showcase-img"  >
             <button class="button3-container">
                 <a href="ethnic.php" >Shop occasional</a>
            
        </button>
          </div>
          <div class="product-featured">
           
            <img src="./assets/images/products/ethnic.jpg" alt="trending" class="showcase-img"  >
             <button class="button3-container">
                 <a href="ethnic.php" >Shop Ethnic Wear</a>
            
        </button>
          </div>
  
           


       <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

        <div class="container">
  
          <div class="testimonials-box">
  
            <!--
              - TESTIMONIALS
            -->
  
            <div class="testimonial">
  
              <h2 class="title">testimonial</h2>
  
              <div class="testimonial-card">
  
                <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">
  
                <p class="testimonial-name">XYZ</p>
  
                <p class="testimonial-title">CEO & Founder </p>
  
               
  
                <p class="testimonial-desc">
                  Superb website have an amazing expericence 
                  of shoping!!
                  
                </p>
  
              </div>
  
            </div>
  
  
  
            <!--
              - CTA
            -->
  
            <div class="cta-container">
  
              <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner" width="100%">
  
              <a href="hotoffer.php" class="cta-content">
  
                <p class="discount">25% Discount</p>
  
                <h2 class="cta-title">Summer collection</h2>
  
                <p class="cta-text">Starting @ &#8377;1000</p>
  
                <button class="cta-btn">Shop now</button>
  
              </a>
  
            </div>
  
  
  
            <!--
              - SERVICE
            -->
  
            <div class="service">
  
              <h2 class="title">Our Services</h2>
  
              <div class="service-container">
  
                <a href="#" class="service-item">
  
                  <div class="service-icon">
                    <ion-icon name="boat-outline"></ion-icon>
                  </div>
  
                  <div class="service-content">
  
                    <h3 class="service-title">Worldwide Delivery</h3>
                    <p class="service-desc">For Order Over &#8377;1000</p>
  
                  </div>
  
                </a>
  
                <a href="#" class="service-item">
                
                  <div class="service-icon">
                    <ion-icon name="rocket-outline"></ion-icon>
                  </div>
                
                  <div class="service-content">
                
                    <h3 class="service-title">Next Day delivery</h3>
                    <p class="service-desc">India Orders Only</p>
                
                  </div>
                
                </a>
  
                <a href="#" class="service-item">
                
                  <div class="service-icon">
                    <ion-icon name="call-outline"></ion-icon>
                  </div>
                
                  <div class="service-content">
                
                    <h3 class="service-title">Best Online Support</h3>
                    <p class="service-desc">Hours: 8AM - 6PM</p>
                
                  </div>
                
                </a>
  
                <a href="#" class="service-item">
                
                  <div class="service-icon">
                    <ion-icon name="arrow-undo-outline"></ion-icon>
                  </div>
                
                  <div class="service-content">
                
                    <h3 class="service-title">Return Policy</h3>
                    <p class="service-desc">Easy & Free Return</p>
                
                  </div>
                
                </a>
  
                <a href="#" class="service-item">
                
                  <div class="service-icon">
                    <ion-icon name="ticket-outline"></ion-icon>
                  </div>
                
                  <div class="service-content">
                
                    <h3 class="service-title">No Delivery Fee</h3>
                    <p class="service-desc">For Order Over &#8377;1000</p>
                
                  </div>
                
                </a>
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </div>
  
  
  
  
  
      <!--
        - BLOG
      -->
  
      <div class="blog">
  
        <div class="container">
  
          <div class="blog-container has-scrollbar">
  
            <div class="blog-card">
  
              <a href="#">
                <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" height="179.85" class="blog-banner">
              </a>
  
              <div class="blog-content">
  
                <a href="#" class="blog-category">Fashion</a>
  
                <a href="#">
                  <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                </a>
  
                <p class="blog-meta">
                  By <cite>Mr Admin</cite> / <time datetime="2023-04-10">Apr 10, 2023</time>
                </p>
  
              </div>
  
            </div>
  
            <div class="blog-card">
            
              <a href="#">
                <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                  class="blog-banner" width="300" height="179.85">
              </a>
            
              <div class="blog-content">
            
                <a href="#" class="blog-category">Clothes</a>
            
                <h3>
                  <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                </h3>
            
                <p class="blog-meta">
                  By <cite>Mr Ragu</cite> / <time datetime="2023-01-18">Jan 18, 2023</time>
                </p>
            
              </div>
            
            </div>
  
            <div class="blog-card">
            
              <a href="#">
                <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                  class="blog-banner" width="300" height="179.85">
              </a>
            
              <div class="blog-content">
            
                <a href="#" class="blog-category">Shoes</a>
            
                <h3>
                  <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
                </h3>
            
                <p class="blog-meta">
                  By <cite>Mr Rani</cite> / <time datetime="2023-02-10">Feb 10, 2023</time>
                </p>
            
              </div>
            
            </div>
  
            <div class="blog-card">
            
              <a href="#">
                <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                  class="blog-banner" width="300" height="179.85">
              </a>
            
              <div class="blog-content">
            
                <a href="#" class="blog-category">Fashion</a>
            
                <h3>
                  <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                </h3>
            
                <p class="blog-meta">
                  By <cite>Mr Pavan</cite> / <time datetime="2023-03-15">Mar 15, 2023</time>
                </p>
            
              </div>
            
            </div>
  
          </div>
  
        </div>
  
      </div>
  
    </main>
  
  
  
  
  
    <!--
      - FOOTER
    -->
  
    <footer>
  
      <div class="footer-category">
  
        <div class="container">
  
          <h2 class="footer-category-title">Brand directory</h2>
  
          <div class="footer-category-box">
  
            <h3 class="category-box-title">Fashion :</h3>
  
            <a href="./mens/casual_men.php" class="footer-category-link">T-shirt</a>
            <a href="./mens/formals_men.php" class="footer-category-link">Shirts</a>
            <a href="./mens/denims.php" class="footer-category-link">shorts & jeans</a>
            <a href="./mens/jackets.php" class="footer-category-link">jacket</a>
            <a href="./women/casual_women.php" class="footer-category-link">dress & frock</a>
   
  
          </div>
  
          <div class="footer-category-box">
            <h3 class="category-box-title">footwear :</h3>
          
            <a href="#" class="footer-category-link">sport</a>
            <a href="#" class="footer-category-link">formal</a>
            <a href="#" class="footer-category-link">Boots</a>
            <a href="#" class="footer-category-link">casual</a>
            <a href="#" class="footer-category-link">cowboy shoes</a>
            <a href="#" class="footer-category-link">safety shoes</a>
            <a href="#" class="footer-category-link">Party wear shoes</a>
            <a href="#" class="footer-category-link">Branded</a>
            <a href="#" class="footer-category-link">Firstcopy</a>
            <a href="#" class="footer-category-link">Long shoes</a>
          </div>
  
         
  
          
  
        </div>
  
      </div>
  
      <div class="footer-nav">
  
        <div class="container">
  
          <ul class="footer-nav-list">
  
            <li class="footer-nav-item">
              <h2 class="nav-title">Popular Categories</h2>
            </li>
  
            <li class="footer-nav-item">
              <a href="./mens/casual_men.php" class="footer-nav-link">MEN'S</a>
            </li>
  
            <li class="footer-nav-item">
              <a href="./women/formals_women.php" class="footer-nav-link">WOMEN'S</a>
            </li>
  
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Shoes</a>
            </li>
  
            
  
          </ul>
  
          <ul class="footer-nav-list">
          
            <li class="footer-nav-item">
              <h2 class="nav-title">Products</h2>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>
          
            <li class="footer-nav-item">
              <a href="hotoffer.php" class="footer-nav-link">Best sales</a>
            </li>
          
            
          
          </ul>
  
          <ul class="footer-nav-list">
          
            <li class="footer-nav-item">
              <h2 class="nav-title">Our Company</h2>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Delivery</a>
            </li>
          
            
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Terms and conditions</a>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">About us</a>
            </li>
          
           
          
          </ul>
  
          <ul class="footer-nav-list">
          
            <li class="footer-nav-item">
              <h2 class="nav-title">Services</h2>
            </li>
          
           
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Delivery</a>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Return Policy</a>
            </li>
          
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Contact us</a>
            </li>
          
          
          
          </ul>
  
          <ul class="footer-nav-list">
  
            <li class="footer-nav-item">
              <h2 class="nav-title">Contact</h2>
            </li>
  
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>
  
              <address class="content">
                419 Kumarswamy Layout 
               Bengaluru, 560078, Karnataka
              </address>
            </li>
  
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
              </div>
  
              <a href="tel:+607936-8058" class="footer-nav-link">(+91)9354678901</a>
            </li>
  
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>
  
              <a href="mailto:example@gmail.com" class="footer-nav-link">node@gmail.com</a>
            </li>
  
          </ul>
  
          <ul class="footer-nav-list">
  
            <li class="footer-nav-item">
              <h2 class="nav-title">Follow Us</h2>
            </li>
  
            <li>
              <ul class="social-link">
  
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
  
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>
  
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>
  
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
  
              </ul>
            </li>
  
          </ul>
  
        </div>
  
      </div>
  
      <div class="footer-bottom">
  
        <div class="container">
  
          <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
  
          <p class="copyright">
            &copy;Copyright <a href="#">Node8</a> all rights reserved.
          </p>
  
        </div>
  
      </div>
  
    </footer>
  
  
  
  
  
  
   <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>