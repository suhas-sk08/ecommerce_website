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
  <link rel="stylesheet"href="../assets/css/style-prefix.css">
  <link rel="stylesheet" href="admin.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>
<body>
<body>
    <header>

        <div class="header-top">
    
        <div class="header-main">
    
    <div class="container">

      <a href="../index.php" class="header-logo">
        <img src="../assets/images/logo/logo.png" alt="SuitYourself logo" width="120" height="36">
</a><p>ADMIN PANEL</p>

    </div>

  </div>
    
           
    
            
    
           
    
          </div>
    
        </div>
    
        <div class="header-main">
    
          <div class="container">
          
     <button class="button17-container">
      <a href="admin.php?formals_men" >Insert Formal Men's</a>

     </button>
<button class="button18-container">
<a href="admin.php?casual_men" >Insert Casual Men's</a>

</button>
<button class="button20-container">
<a href="admin.php?formals_women" > Insert Formal Women's</a>

</button>
<button class="button21-container">
<a href="admin.php?casual_women" >Insert Casual Women's</a>

</button>
<button class="button22-container">
<a href="admin.php?jackets" >Jackets</a>
</button>


  
 
  
  </div>
  <div class="header-main">
    
    <div class="container">
    <button class="button22-container">
<a href="admin.php?ethnic" >Ethnic wear</a>
</button>
    <button class="button19-container">
<a href="admin.php?winter" >Winter Wear</a>

</button>
<button class="button19-container">
<a href="admin.php?denim" >Denim</a>

</button>

<button class="button20-container">
<a href="admin.php?insert_category2" > All Payments</a>

</button>

<button class="button22-container">
<a href="#" >View Products</a>
</button>
<button class="button19-container">
<a href="#" >All orders</a>

</button>




</div>
  
            
    
        <nav class="desktop-navigation-menu">
    
          <div class="container">
    
          </div>
    
        </nav>
    
    
      </header>
    

      <a href="" style="padding-left: 30px; padding-top:40px ">USERNAME</a>


 
  
  <div class="container my-10 " style="padding-bottom: 10px;" >
    <?php
    if(isset($_GET['formals_men'])){
      include('formals_men.php');
    }
    if(isset($_GET['casual_men'])){
      include('casual_men.php');
    }
    if(isset($_GET['formals_women'])){
      include('formals_women.php');
    }
    if(isset($_GET['casual_women'])){
      include('casual_women.php');
    }
    if(isset($_GET['jackets'])){
      include('jackets.php');
    }
    if(isset($_GET['winter'])){
      include('winter.php');
    }
    if(isset($_GET['ethnic'])){
      include('ethnic.php');
    }
    if(isset($_GET['denim'])){
      include('denim.php');
    }
    if(isset($_GET['insert_category2'])){
      include('insert_categories2.php');
    }
    if(isset($_GET['insert_category3'])){
      include('insert_categories3.php');
    }?>
  </div>
  

  

  


  <!--
      - FOOTER
    -->
  
    <footer>
  
      
  
      <div class="footer-nav">
  
        <div class="container">
  
          <ul class="footer-nav-list">
  
            <li class="footer-nav-item">
              <h2 class="nav-title">Popular Categories</h2>
            </li>
  
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">MEN'S</a>
            </li>
  
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Women's</a>
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
