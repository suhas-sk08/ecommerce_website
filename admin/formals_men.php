<?php
 include('../includes/connect.php');
if(isset($_POST['insert_products'])){
    $product_title=$_POST['product1_title'];
    $description=$_POST['product1_description'];
    $product_keyword=$_POST['product1_keyword'];
    $product_category=$_POST['product1_title'];
    
    $product_price=$_POST['product1_price'];
    $product_status='true';
    $product_image1=$_FILES['product1_image1']['name'];
    $product_image2=$_FILES['product1_image2']['name'];
    $product_image3=$_FILES['product1_image3']['name'];
    $temp_image1=$_FILES['product1_image1']['tmp_name'];
    $temp_image2=$_FILES['product1_image2']['tmp_name'];
    $temp_image3=$_FILES['product1_image3']['tmp_name'];

    if($product_title==''or $description==''or $product_keyword==''or $product_price==''or
    $product_image1=='' or $product_image2==''or $product_image3==''  ){
        echo"<script> alert('please fill all the fields')</script>";
        exit();
    }else{
       move_uploaded_file($temp_image1,"product_images/$product_image1"); 
       move_uploaded_file($temp_image2,"product_images/$product_image2"); 
       move_uploaded_file($temp_image3,"product_images/$product_image3"); 

       $insert_products="INSERT INTO `formals_men`(product1_title,product1_description,
       product1_keyword,product1_image1,product1_image2,product1_image3,product1_price)
       VALUES ('$product_title','$description','$product_keyword','$product_image1'
       ,'$product_image2','$product_image3','$product_price')";
       $result_query=mysqli_query($con,$insert_products);
          if($result_query){
            echo"<script> alert('Inserted successfully')</script>";
        
          } 
}
}

?>


<html>
  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin|Insert Products</title>
        <link rel="shortcut icon" href="../assets/images/logo/logo1.png" type="image/x-icon">
        <link rel="shortcut icon" href=".//assets/images/logo/logo1.png" type="image/x-icon">

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
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="products.css">
    </head>
    <body>
    <header>



   

    

   

  </div>

</div>
      <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
        <h1 class="color:black"> Insert Products </h1>
        
        <fieldset>
          
          
          <label for="product1_title">Product Title</label>
          <input type="text" id="product1_title" name="product1_title" placeholder="Enter the product name" required="required">
        
          <label for="product1_description">Description</label>
          <input type="text" id="product1_description" name="product1_description" placeholder="Enter the product description" required="required">
        
          <label for="product1_keyword">Product Keyword</label>
          <input type="text" id="product1_keyword" name="product1_keyword" placeholder="Enter the product description" required="required">

          <label for="Product1_category">Select category</label>
          <select name="product1_category" id="" class="product1_category">
            <option value="">select category</option>
            <?php
             $select_query="SELECT *FROM `category`";
             $result_query= mysqli_query($con,$select_query);
             while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                echo  "<option value='$category_id'>$category_title</option>";
             }
             
            ?>
             
            

          </select>
          
          
         
        </fieldset>
        <fieldset>  
        <label for="product1_image1">Product Image</label>
          <input type="file" id="product1_image1" name="product1_image1" required="required">

          <label for="product1_image2">Product Image2</label>
          <input type="file" id="product1_image2" name="product1_image2" required="required">

          <label for="product1_image3">Product Image3</label>
          <input type="file" id="product1_image3" name="product1_image3" required="required">
        
        </fieldset>
         <fieldset>
         <label for="product1_price">Product Price</label>
          <input type="text" id="product1_price" name="product1_price" required="required">
        
         </fieldset>
       
        <input type="submit" name="insert_products" class="btn-info mb-3 px-5" value="Insert Products" style="background-color:#fe9929">
      
       </form>
        
      </div>
     





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
