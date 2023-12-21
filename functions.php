<?php
include('./includes/connect.php');
?>
<?php
 function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query="SELECT * FROM `formals_men`WHERE product1_keyword LIKE
   ' %$search_data_value %'";
    $result_query=mysqli_query($con,$search_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product1_id'];
        $product_title=$row['product1_title'];
        $product_description=$row['product1_description'];
        $product_image1=$row['product1_image1'];
        $product_price=$row['product1_price'];
      
        echo "  <div class='product-grid'>

        <div class='product-card'>
          <a href=''>
          <img src='./admin/product_images/$product_image1' alt='dress & frock'width='350px'>
          <div class='product-title'>$product_title</h3>
          </a>
        
        
          <a href='#'class='category-btn'><h3>$product_price</h3></a>
        </div>
        </div>
        </div>";
    }
 }
 }
?>