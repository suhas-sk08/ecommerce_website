<?php
 include('../includes/connect.php');
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
  <link rel="shortcut icon" href="../assets/images/logo/logo1.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style-prefix.css">
  

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
   <style>
    .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px));
    gap: 0px;
}

.product-card {
    background-color: white;
    
    padding: 15px;
    text-align: center;
}

.product-image {
    
    height: auto;
}

.product-title {
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}

.product-price {
    color: #e44d26;
    font-size: 18px;
    font-weight: bold;
    margin-top: 5px;
}
</style>
</head>
<body>
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

    <a href="../index.php" class="header-logo">
      <img src="../assets/images/logo/logo.png" alt="SuitYourself logo" width="120" height="36">
    </a>

    <div class="header-search-container">

      <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

      <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>

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
        <a href="../index.php" class="menu-title">Home</a>
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
                <img src="../assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
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
                <img src="../assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
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
                <img src="../assets/images/shoe_banner.jpg" alt="mouse collection" width="250" height="119">
              </a>
            </li>

          </ul>

        </div>
      </li>

      <li class="menu-category">
        <a href="#" class="menu-title">Men's</a>

        <ul class="dropdown-list">

          <li class="dropdown-item">
            <a href="../mens/formals_men.php">Shirt</a>
          </li>

          <li class="dropdown-item">
            <a href="../mens/denims.php">Shorts & Jeans</a>
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
            <a href="./casual_women.php">Dress & Frock</a>
          </li>

          <li class="dropdown-item">
            <a href="./casual_women.php">Jumpsuits</a>
          </li>

          <li class="dropdown-item">
            <a href="./formals_women.php">Tops</a>
          </li>

          <li class="dropdown-item">
            <a href="./formals_women.php"> Pants</a>
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
          <a href="#" class="submenu-title">Shirt</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Shorts & Jeans</a>
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
          <a href="#" class="submenu-title">Dress & Frock</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Jumpsuits</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title">Pants</a>
        </li>

        <li class="submenu-category">
          <a href="#" class="submenu-title"> Tops</a>
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
      <div>
      <img src="../assets/images/banner/sweaters.png" width="100%">
     
      <div class="product-grid">
      <?php
       $select_query="SELECT *FROM`winter`";
       $result_query= mysqli_query($con,$select_query);

       while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product7_id'];
        $product_title=$row['product7_title'];
        $product_description=$row['product7_description'];
        $product_image1=$row['product7_image1'];
        $product_price=$row['product7_price'];
        
        echo "  <div class='product-grid'>

        <div class='product-card'>
          <a href=''>
          <img src='../admin/product_images/$product_image1' alt='dress & frock'width='350px'>
          <div class='product-title'>$product_title</h3>
          </a>
        
        
          <a href='#'class='category-btn'><h3>$product_price</h3></a>
        </div>
        </div>
        </div>";
        
       }
       
      
      ?>  
      </div>
      </div>
    <!--
      - FOOTER
    -->
  
    <footer>
  
  <div class="footer-category">

    <div class="container">

      <h2 class="footer-category-title">Brand directory</h2>

      <div class="footer-category-box">

        <h3 class="category-box-title">Fashion :</h3>

        <a href="../mens/casual_men.php" class="footer-category-link">T-shirt</a>
        <a href="../mens/formals_men.php" class="footer-category-link">Shirts</a>
        <a href="../mens/denims.php" class="footer-category-link">shorts & jeans</a>
        <a href=".,/mens/jacket.php" class="footer-category-link">jacket</a>
        <a href="./casual_women.php" class="footer-category-link">dress & frock</a>


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
          <a href="../mens/casual_men.php" class="footer-nav-link">MEN'S</a>
        </li>

        <li class="footer-nav-item">
          <a href="./casual_women.php" class="footer-nav-link">Women's</a>
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
          <a href="#" class="footer-nav-link">Best sales</a>
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
      <img src="../assets/images/payment.png" alt="payment method" class="payment-img">
      <p class="copyright">
        &copy;Copyright <a href="#">Node8</a> all rights reserved.
      </p>
    </div>
  </div>

</footer>
   <!--
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
