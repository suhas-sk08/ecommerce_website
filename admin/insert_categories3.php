<?php
 include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category3_title=$_POST['cat_title'];
  $select_query="SELECT * FROM `categories3` WHERE `category3_title`='$category3_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo"<script>alert('This is present inside the database')</script>";
  }else{

  $insert_query="INSERT INTO`categories3`(`category3_title`) VALUES ('$category3_title')" ;
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo"<script>alert('category has been inserted successfully')</script>";
  }
}}

?>
<h3 aline="center">Insert Categories</h3>

<form action="" method="post" class="mb-2" >

<div class="input-group w-90 mb-2">
  <span class="input-group-text " id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="Insert Categories3s" name="cat_title"
   aria-label="Username" aria-describedby="addon-wrapping">
</div>
<div class="input-group2 w-10 mb-3">
  <style>
    .input-group2{
      border: 0;
      padding: 2px;
      margin: 10px;
    }
    </style>
 <input type="submit"class=" bg-info border-0 p-2 my-3" style="background-color:#fe9929 "name="insert_cat" value="Insert Categories">
</div>
</form>