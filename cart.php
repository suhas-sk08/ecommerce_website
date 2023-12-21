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
    <style>
      
      
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
    
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: 0;
    padding: 6vh 12vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
        
    }
}
.summary{
    background-color:#ddd ;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
    
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
    display: flex;
    
}.row{
    margin: 0;
    display: flex;
}
.row1{
    margin: 0;
    display: flex;
    
}
.title b{
    font-size: 1.5rem;
    
}
.main{
    margin: 0;
    padding: 2vh 0;
    
}
.col-2, .col{
    padding: 0 1vh;
    
    
}
.col-4{
    padding: 0 1vh;
    display: flex;
    
}


a{
    padding: 0 1vh;
}
.close{
    margin-left: 203px;
    font-size: 0.7rem;
    display: flex;
}

img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
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
<div class="div" >
<div class="card">
            <div class="row1">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted">3 items</div>
                        </div>
                    </div>    
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                            <div class="col">
                                
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col-4">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">&#8377; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                            <div class="col">
                                
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col-4">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col" >&#8377; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                            <div class="col">
                              
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col-4">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">&#8377; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row-2">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&#8377; 132.00</div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &#8377;5.00</option></select>
                        <p>PROMO CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&#8377; 137.00</div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>
            
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